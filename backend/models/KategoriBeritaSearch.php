<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KategoriBerita;

/**
 * KategoriBeritaSearch represents the model behind the search form of `backend\models\KategoriBerita`.
 */
class KategoriBeritaSearch extends KategoriBerita
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_id'], 'integer'],
            [['kategori_name'], 'safe'],
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
        $query = KategoriBerita::find();

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
            'kategori_id' => $this->kategori_id,
        ]);

        $query->andFilterWhere(['like', 'kategori_name', $this->kategori_name]);

        return $dataProvider;
    }
}
