<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "atribut_puskesmas".
 *
 * @property int $id_atribut
 * @property string $nama_atribut
 * @property string $dekripsi_atribut
 * @property string $gambar_atribut
 */
class AtributPuskesmas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atribut_puskesmas';
    }

    /**
     * {@inheritdoc}
     */

    public $upload_atribut;

    public function rules()
    {
        return [
            [['nama_atribut', 'dekripsi_atribut', 'gambar_atribut','jenis_atribut'], 'required'],
            [['dekripsi_atribut'], 'string'],
            [['nama_atribut'], 'string', 'max' => 200],
            [['jenis_atribut'], 'string', 'max' => 100],
            [['gambar_atribut'], 'string', 'max' => 255],


            [['upload_atribut',],'required','on'=>['create']], 
            ['upload_atribut', 'file', 'extensions' => ['jpg','png','JPEG','JPG'],  
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
            'id_atribut' => 'Id Atribut',
            'jenis_atribut' => 'Jenis Atribut',
            'nama_atribut' => 'Nama Atribut',
            'dekripsi_atribut' => 'Dekripsi Atribut',
            'gambar_atribut' => 'Gambar Atribut',
        ];
    }
}
