<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MenuManagemen;

/**
 * MenuManagemenSearch represents the model behind the search form of `backend\models\MenuManagemen`.
 */
class MenuManagemenSearch extends MenuManagemen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_id', 'menu_parent', 'menu_type', 'menu_order', 'menu_status'], 'integer'],
            [['menu_nama', 'menu_item'], 'safe'],
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
        $query = MenuManagemen::find();

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
            'menu_id' => $this->menu_id,
            'menu_parent' => $this->menu_parent,
            'menu_order' => $this->menu_order,
            'menu_status' => $this->menu_status,
        ]);

        $query->andFilterWhere(['like', 'menu_nama', $this->menu_nama])
            ->andFilterWhere(['like', 'menu_item', $this->menu_item])
            ->andFilterWhere(['like', 'menu_type', $this->menu_type]);

        return $dataProvider;
    }
}
