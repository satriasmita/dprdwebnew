<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Komisi;

/**
 * KomisiSearch represents the model behind the search form of `backend\models\Komisi`.
 */
class KomisiSearch extends Komisi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['komisi_id', 'komisi_kategori_id', 'komisi_agama'], 'integer'],
            [['komisi_nama', 'komisi_jabatan', 'komisi_image', 'komisi_ttl', 'komisi_suamiistri', 'komisi_anak', 'komisi_alamat', 'komisi_pengalaman_organisasi'], 'safe'],
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
        $query = Komisi::find();

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
            'komisi_id' => $this->komisi_id,
            'komisi_kategori_id' => $this->komisi_kategori_id,
            'komisi_agama' => $this->komisi_agama,
        ]);

        $query->andFilterWhere(['like', 'komisi_nama', $this->komisi_nama])
            ->andFilterWhere(['like', 'komisi_jabatan', $this->komisi_jabatan])
            ->andFilterWhere(['like', 'komisi_image', $this->komisi_image])
            ->andFilterWhere(['like', 'komisi_ttl', $this->komisi_ttl])
            ->andFilterWhere(['like', 'komisi_suamiistri', $this->komisi_suamiistri])
            ->andFilterWhere(['like', 'komisi_anak', $this->komisi_anak])
            ->andFilterWhere(['like', 'komisi_alamat', $this->komisi_alamat])
            ->andFilterWhere(['like', 'komisi_pengalaman_organisasi', $this->komisi_pengalaman_organisasi]);

        return $dataProvider;
    }
}
