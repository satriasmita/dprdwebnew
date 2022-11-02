<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PimpinanDewan;

/**
 * PimpinanDewanSearch represents the model behind the search form of `frontend\models\PimpinanDewan`.
 */
class PimpinanDewanSearch extends PimpinanDewan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pimpinan_id', 'pimpinan_agama'], 'integer'],
            [['pimpinan_image', 'pimpinan_ttl', 'pimpinan_suamiistri', 'pimpinan_anak', 'pimpinan_alamat', 'pimpinan_pengalaman_organisasi'], 'safe'],
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
        $query = PimpinanDewan::find();

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
            'pimpinan_id' => $this->pimpinan_id,
            'pimpinan_agama' => $this->pimpinan_agama,
        ]);

        $query->andFilterWhere(['like', 'pimpinan_image', $this->pimpinan_image])
            ->andFilterWhere(['like', 'pimpinan_ttl', $this->pimpinan_ttl])
            ->andFilterWhere(['like', 'pimpinan_suamiistri', $this->pimpinan_suamiistri])
            ->andFilterWhere(['like', 'pimpinan_anak', $this->pimpinan_anak])
            ->andFilterWhere(['like', 'pimpinan_alamat', $this->pimpinan_alamat])
            ->andFilterWhere(['like', 'pimpinan_pengalaman_organisasi', $this->pimpinan_pengalaman_organisasi]);

        return $dataProvider;
    }
}
