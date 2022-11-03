<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Galeri;

/**
 * GaleriSearch represents the model behind the search form of `backend\models\Galeri`.
 */
class GaleriSearch extends Galeri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['galeri_id', 'galeri_status'], 'integer'],
            [['galeri_title', 'galeri_image', 'galeri_desc', 'galeri_date'], 'safe'],
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
        $query = Galeri::find();

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
            'galeri_id' => $this->galeri_id,
            'galeri_date' => $this->galeri_date,
            'galeri_status' => $this->galeri_status,
        ]);

        $query->andFilterWhere(['like', 'galeri_title', $this->galeri_title])
            ->andFilterWhere(['like', 'galeri_image', $this->galeri_image])
            ->andFilterWhere(['like', 'galeri_desc', $this->galeri_desc]);

        return $dataProvider;
    }
}
