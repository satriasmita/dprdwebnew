<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KategoriFraksi;

/**
 * KategoriFraksiSearch represents the model behind the search form of `backend\models\KategoriFraksi`.
 */
class KategoriFraksiSearch extends KategoriFraksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fraksi_kategori_id', 'fraksi_status'], 'integer'],
            [['fraksi_kat'], 'safe'],
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
        $query = KategoriFraksi::find();

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
            'fraksi_kategori_id' => $this->fraksi_kategori_id,
            'fraksi_status' => $this->fraksi_status,
        ]);

        $query->andFilterWhere(['like', 'fraksi_kat', $this->fraksi_kat]);

        return $dataProvider;
    }
}
