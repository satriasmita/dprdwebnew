<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SurveiIkm;

/**
 * SurveiIkmSearch represents the model behind the search form of `backend\models\SurveiIkm`.
 */
class SurveiIkmSearch extends SurveiIkm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ikm', 'umur_surveyer'], 'integer'],
            [['nama_surveyer', 'alamat_surveyer', 'pedidikan', 'pekerjaan', 'create_at', 'update_at', 'create_by', 'update_by'], 'safe'],
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
        $query = SurveiIkm::find();

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
            'id_ikm' => $this->id_ikm,
            'umur_surveyer' => $this->umur_surveyer,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'create_by' => $this->create_by,
            'update_by' => $this->update_by,
        ]);

        $query->andFilterWhere(['like', 'nama_surveyer', $this->nama_surveyer])
            ->andFilterWhere(['like', 'alamat_surveyer', $this->alamat_surveyer])
            ->andFilterWhere(['like', 'pedidikan', $this->pedidikan])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan]);

        return $dataProvider;
    }
}
