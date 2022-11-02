<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SaranaPrasarana;

/**
 * SaranaPrasaranaSearch represents the model behind the search form of `backend\models\SaranaPrasarana`.
 */
class SaranaPrasaranaSearch extends SaranaPrasarana
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sarana'], 'integer'],
            [['nama_sarana', 'deskripsi', 'gambar_sarana'], 'safe'],
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
        $query = SaranaPrasarana::find();

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
            'id_sarana' => $this->id_sarana,
        ]);

        $query->andFilterWhere(['like', 'nama_sarana', $this->nama_sarana])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'gambar_sarana', $this->gambar_sarana]);

        return $dataProvider;
    }
}
