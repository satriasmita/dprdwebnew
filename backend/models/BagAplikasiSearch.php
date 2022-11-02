<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\BagAplikasi;

/**
 * BagAplikasiSearch represents the model behind the search form of `backend\models\BagAplikasi`.
 */
class BagAplikasiSearch extends BagAplikasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aplikasi_id'], 'integer'],
            [['aplikasi_nama', 'aplikasi_image', 'aplikasi_keterangan', 'aplikasi_url'], 'safe'],
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
        $query = BagAplikasi::find();

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
            'aplikasi_id' => $this->aplikasi_id,
        ]);

        $query->andFilterWhere(['like', 'aplikasi_nama', $this->aplikasi_nama])
            ->andFilterWhere(['like', 'aplikasi_image', $this->aplikasi_image])
            ->andFilterWhere(['like', 'aplikasi_keterangan', $this->aplikasi_keterangan])
            ->andFilterWhere(['like', 'aplikasi_url', $this->aplikasi_url]);

        return $dataProvider;
    }
}
