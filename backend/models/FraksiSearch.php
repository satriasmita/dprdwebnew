<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Fraksi;

/**
 * FraksiSearch represents the model behind the search form of `backend\models\Fraksi`.
 */
class FraksiSearch extends Fraksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fraksi_id', 'fraksi_kategori_id', 'fraksi_agama'], 'integer'],
            [['fraksi_nama', 'fraksi_jabatan', 'fraksi_image', 'fraksi_ttl', 'fraksi_suamiistri', 'fraksi_anak', 'fraksi_alamat', 'fraksi_pengalaman_organisasi'], 'safe'],
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
        $query = Fraksi::find();

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
            'fraksi_id' => $this->fraksi_id,
            'fraksi_kategori_id' => $this->fraksi_kategori_id,
            'fraksi_agama' => $this->fraksi_agama,
        ]);

        $query->andFilterWhere(['like', 'fraksi_nama', $this->fraksi_nama])
            ->andFilterWhere(['like', 'fraksi_jabatan', $this->fraksi_jabatan])
            ->andFilterWhere(['like', 'fraksi_image', $this->fraksi_image])
            ->andFilterWhere(['like', 'fraksi_ttl', $this->fraksi_ttl])
            ->andFilterWhere(['like', 'fraksi_suamiistri', $this->fraksi_suamiistri])
            ->andFilterWhere(['like', 'fraksi_anak', $this->fraksi_anak])
            ->andFilterWhere(['like', 'fraksi_alamat', $this->fraksi_alamat])
            ->andFilterWhere(['like', 'fraksi_pengalaman_organisasi', $this->fraksi_pengalaman_organisasi]);

        return $dataProvider;
    }
}
