<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SurveiSettingDetail;

/**
 * SurveiSettingDetailmasSearch represents the model behind the search form of `backend\models\SurveiSettingDetail`.
 */
class SurveiSettingDetailmasSearch extends SurveiSettingDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_survei', 'kode_survei_detail', 'nilai_surveidetail'], 'integer'],
            [['kode_survei', 'nama_settingsurveidetail'], 'safe'],
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
        $query = SurveiSettingDetail::find();

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
            'id_survei' => $this->id_survei,
            // 'kode_survei_detail' => $this->kode_survei_detail,
            'nilai_surveidetail' => $this->nilai_surveidetail,
        ]);

        $query->andFilterWhere(['like', 'kode_survei', $this->kode_survei])
            ->andFilterWhere(['like', 'kode_survei_detail', $this->kode_survei_detail])
            ->andFilterWhere(['like', 'nama_settingsurveidetail', $this->nama_settingsurveidetail]);

        return $dataProvider;
    }
}
