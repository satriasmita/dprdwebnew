<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataInstansi;

/**
 * DataInstansiSearch represents the model behind the search form of `backend\models\DataInstansi`.
 */
class DataInstansiSearch extends DataInstansi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'no_wa'], 'integer'],
            [['nama_upt', 'alamat_upt', 'telp', 'email','website'], 'safe'],
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
        $query = DataInstansi::find();

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
            'id' => $this->id,
            'no_wa' => $this->no_wa,
        ]);

        $query->andFilterWhere(['like', 'nama_upt', $this->nama_upt])
            ->andFilterWhere(['like', 'alamat_upt', $this->alamat_upt])
            ->andFilterWhere(['like', 'telp', $this->telp])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
