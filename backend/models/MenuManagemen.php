<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "menu_managemen".
 *
 * @property int $menu_id
 * @property int|null $menu_parent
 * @property string $menu_nama
 * @property int $menu_type
 * @property string $menu_item
 * @property int $menu_order
 * @property int $menu_status
 */
class MenuManagemen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_managemen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_parent', 'menu_order', 'menu_status'], 'integer'],
            [['menu_nama', 'menu_type', 'menu_item', 'menu_order', 'menu_status'], 'required'],
            [['menu_type'], 'string', 'max' => 30],
            [['menu_nama'], 'string', 'max' => 200],
            [['menu_item'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'menu_parent' => 'Parent Menu',
            'menu_nama' => 'Nama Menu',
            'menu_type' => 'Tipe Menu',
            'menu_item' => 'Item Menu',
            'menu_order' => 'Urutan Menu',
            'menu_status' => 'Status',
        ];
    }

    public function getDataMenu(){
        $queryMenu = MenuManagemen::find()
                    ->where(['menu_parent'=>null])
                    ->andWhere(['menu_status'=>1])
                    ->orderBy(['menu_order'=>SORT_ASC])
                    // ->limit(6)
                    ->all();
        return $queryMenu;
    }

    public function getDataSubmenu($menu_id){
        $querysubmenu = MenuManagemen::find()
                    ->where(['menu_parent'=>$menu_id])
                    ->orderBy(['menu_order'=>SORT_ASC])
                    ->all();
        return $querysubmenu;
    }

    public function getDropdownDataMenu(){
        $queryMenu = MenuManagemen::find()
                    ->orderBy(['menu_order'=>SORT_ASC])
                    // ->limit(6)
                    ->all();
        $dropDown = \yii\helpers\ArrayHelper::map($queryMenu,'menu_id','menu_nama');
        return $dropDown;
    }

    public function getDataParent()
    {
        return $this->hasOne(MenuManagemen::className(), ['menu_id' => 'menu_parent']);
    }
}
