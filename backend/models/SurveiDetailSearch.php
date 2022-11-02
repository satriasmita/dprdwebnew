<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SurveiDetail;

/**
 * SurveiDetailSearch represents the model behind the search form of `backend\models\SurveiDetail`.
 */
class SurveiDetailSearch extends SurveiDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_survei_detail'], 'integer'],
            [['kode_survei', 'nama_survei_detail', 'jenis_input'], 'safe'],
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
        $query = SurveiDetail::find();

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
            'kode_survei_detail' => $this->kode_survei_detail,
        ]);

        $query->andFilterWhere(['like', 'kode_survei', $this->kode_survei])
            ->andFilterWhere(['like', 'nama_survei_detail', $this->nama_survei_detail])
            ->andFilterWhere(['like', 'jenis_input', $this->jenis_input]);

        return $dataProvider;
    }
}
