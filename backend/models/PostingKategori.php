<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "posting_kategori".
 *
 * @property int $id_kategori
 * @property string $nama_kategori
 */
class PostingKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posting_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kategori'], 'required'],
            [['nama_kategori'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'nama_kategori' => 'Nama Kategori',
        ];
    }

    

    public function getDropDownPostingKategori(){
        $kategori = PostingKategori::find() 
                    -> all();
        $dropDown = \yii\helpers\ArrayHelper::map($kategori,'id_kategori','nama_kategori');
        return $dropDown;
    }
}
