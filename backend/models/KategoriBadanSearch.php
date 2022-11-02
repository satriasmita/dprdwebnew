<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KategoriBadan;

/**
 * KategoriBadanSearch represents the model behind the search form of `backend\models\KategoriBadan`.
 */
class KategoriBadanSearch extends KategoriBadan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['badan_kategori_id'], 'integer'],
            [['badan_kategori'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = KategoriBadan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'badan_kategori_id' => $this->badan_kategori_id,
        ]);

        $query->andFilterWhere(['like', 'badan_kategori', $this->badan_kategori]);

        return $dataProvider;
    }
}
