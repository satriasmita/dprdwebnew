<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property int $kategori_id
 * @property string $kategori_nama
 * @property int $kategori_status
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_id', 'kategori_nama', 'kategori_status'], 'required'],
            [['kategori_id', 'kategori_status'], 'integer'],
            [['kategori_nama'], 'string', 'max' => 100],
            [['kategori_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kategori_id' => 'Kategori ID',
            'kategori_nama' => 'Kategori Nama',
            'kategori_status' => 'Kategori Status',
        ];
    }

    public function getListKategori(){
        $kategori = Kategori::find() 
                    -> where(['kategori_status'=>1])
                    -> all();
        $dropDown = \yii\helpers\ArrayHelper::map($kategori,'kategori_id','kategori_nama');
        return $dropDown;
    }

    
}
