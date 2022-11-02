<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Badan;

/**
 * BadanSearch represents the model behind the search form of `backend\models\Badan`.
 */
class BadanSearch extends Badan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['badan_id', 'badan_kategori_id', 'badan_agama'], 'integer'],
            [['badan_nama', 'badan_jabatan', 'badan_image', 'badan_ttl', 'badan_suamiistri', 'badan_anak', 'badan_alamat', 'badan_pengalaman_organisasi'], 'safe'],
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
        $query = Badan::find();

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
            'badan_id' => $this->badan_id,
            'badan_kategori_id' => $this->badan_kategori_id,
            'badan_agama' => $this->badan_agama,
        ]);

        $query->andFilterWhere(['like', 'badan_nama', $this->badan_nama])
            ->andFilterWhere(['like', 'badan_jabatan', $this->badan_jabatan])
            ->andFilterWhere(['like', 'badan_image', $this->badan_image])
            ->andFilterWhere(['like', 'badan_ttl', $this->badan_ttl])
            ->andFilterWhere(['like', 'badan_suamiistri', $this->badan_suamiistri])
            ->andFilterWhere(['like', 'badan_anak', $this->badan_anak])
            ->andFilterWhere(['like', 'badan_alamat', $this->badan_alamat])
            ->andFilterWhere(['like', 'badan_pengalaman_organisasi', $this->badan_pengalaman_organisasi]);

        return $dataProvider;
    }
}
