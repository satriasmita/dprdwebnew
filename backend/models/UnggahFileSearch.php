<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UnggahFile;

/**
 * UnggahFileSearch represents the model behind the search form of `backend\models\UnggahFile`.
 */
class UnggahFileSearch extends UnggahFile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_unggah', 'unggah_oleh', 'status_unggah'], 'integer'],
            [['jenis_unggah', 'nama_unggah', 'keterangan_unggah', 'lokasi_unggah', 'tanggal_unggah'], 'safe'],
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
        $query = UnggahFile::find();

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
            'id_unggah' => $this->id_unggah,
            'tanggal_unggah' => $this->tanggal_unggah,
            'unggah_oleh' => $this->unggah_oleh,
            'status_unggah' => $this->status_unggah,
        ]);

        $query->andFilterWhere(['like', 'jenis_unggah', $this->jenis_unggah])
            ->andFilterWhere(['like', 'nama_unggah', $this->nama_unggah])
            ->andFilterWhere(['like', 'keterangan_unggah', $this->keterangan_unggah])
            ->andFilterWhere(['like', 'lokasi_unggah', $this->lokasi_unggah]);

        return $dataProvider;
    }
}
