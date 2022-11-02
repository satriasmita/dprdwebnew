<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sarana_prasarana".
 *
 * @property int $id_sarana
 * @property string $nama_sarana
 * @property string $deskripsi
 * @property string $gambar_sarana
 */
class SaranaPrasarana extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sarana_prasarana';
    }

    /**
     * {@inheritdoc}
     */
    public $upload_image_sarana;
    public function rules()
    {
        return [
            [['nama_sarana', 'deskripsi', 'gambar_sarana'], 'required'],
            [['nama_sarana'], 'string', 'max' => 100],
            [['deskripsi', 'gambar_sarana'], 'string', 'max' => 255],

            [['upload_image_sarana',],'required','on'=>['create']], 
            ['upload_image_sarana', 'file', 'extensions' => ['jpg','png','JPEG','JPG'],
                //'maxSize' => 1024 * 1024 * 4, 
                //'tooBig' => 'Gambar cover tidak boleh lebih dari 4 mb', 
                'wrongExtension' => 'Hanya format gambar {extensions}  yang diizinkan untuk {attribute}.',
              
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sarana' => 'Id Sarana',
            'nama_sarana' => 'Nama Sarana',
            'deskripsi' => 'Deskripsi',
            'gambar_sarana' => 'Gambar Sarana',
        ];
    }
}
