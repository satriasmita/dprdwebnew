<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StatisPage;

/**
 * StatisPageSearch represents the model behind the search form of `backend\models\StatisPage`.
 */
class StatisPageSearch extends StatisPage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_page', 'url_page'], 'integer'],
            [['nama_page'], 'safe'],
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
        $query = StatisPage::find();

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
            'id_page' => $this->id_page,
            'url_page' => $this->url_page,
        ]);

        $query->andFilterWhere(['like', 'nama_page', $this->nama_page]);

        return $dataProvider;
    }
}
