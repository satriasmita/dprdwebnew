<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AtributPuskesmas;

/**
 * AtributPuskesmasSearch represents the model behind the search form of `backend\models\AtributPuskesmas`.
 */
class AtributPuskesmasSearch extends AtributPuskesmas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_atribut'], 'integer'],
            [['nama_atribut', 'dekripsi_atribut', 'gambar_atribut','jenis_atribut'], 'safe'],
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
        $query = AtributPuskesmas::find();

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
            'id_atribut' => $this->id_atribut,
        ]);

        $query->andFilterWhere(['like', 'nama_atribut', $this->nama_atribut])
            ->andFilterWhere(['like', 'dekripsi_atribut', $this->dekripsi_atribut])
            ->andFilterWhere(['like', 'jenis_atribut', $this->jenis_atribut])
            ->andFilterWhere(['like', 'gambar_atribut', $this->gambar_atribut]);

        return $dataProvider;
    }
}
