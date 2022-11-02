<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Posting;

/**
 * PostingSearch represents the model behind the search form of `backend\models\Posting`.
 */
class PostingSearch extends Posting
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['posting_id', 'homepage_kategori','posting_category' ,'posting_status', 'posting_layout', 'create_by', 'update_by','posting_menu'], 'integer'],
            [['posting_judul', 'posting_icon', 'posting_gambar', 'posting_deskripsi', 'create_at', 'update_at', 'trans_ip','homepage_kategori'], 'safe'],
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
        $query = Posting::find();

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
            'posting_id' => $this->posting_id,
            'homepage_kategori' => $this->homepage_kategori,
            'posting_category' => $this->posting_category,
            'posting_menu' => $this->posting_menu,
            'posting_status' => $this->posting_status,
            'posting_layout' => $this->posting_layout,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'create_by' => $this->create_by,
            'update_by' => $this->update_by,
        ]);

        $query->andFilterWhere(['like', 'posting_judul', $this->posting_judul])
            ->andFilterWhere(['like', 'posting_icon', $this->posting_icon])
            ->andFilterWhere(['like', 'posting_image_utama', $this->posting_image_utama])
            ->andFilterWhere(['like', 'posting_deskripsi', $this->posting_deskripsi])
            ->andFilterWhere(['like', 'trans_ip', $this->trans_ip]);

        return $dataProvider;
    }
}
