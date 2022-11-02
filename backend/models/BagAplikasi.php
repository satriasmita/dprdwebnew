<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bag_aplikasi".
 *
 * @property int $aplikasi_id
 * @property string $aplikasi_nama
 * @property string $aplikasi_image
 * @property string $aplikasi_keterangan
 * @property string $aplikasi_url
 */
class BagAplikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bag_aplikasi';
    }

    /**
     * {@inheritdoc}
     */

    public $aplikasi_upload;

    public function rules()
    {
        return [
            [['aplikasi_nama', 'aplikasi_image', 'aplikasi_keterangan', 'aplikasi_url'], 'required'],
            [['aplikasi_keterangan'], 'string'],
            [['aplikasi_nama'], 'string', 'max' => 100],
            [['aplikasi_image', 'aplikasi_url'], 'string', 'max' => 300],

            [['aplikasi_upload',],'required','on'=>['create']],  //ini wajib diisi saat create
            ['aplikasi_upload', 'file', 'extensions' => ['jpg','png','JPEG','JPG'],  //ini extensin gambar yg kita iziznin upload
                //'maxSize' => 1024 * 1024 * 4, 
                //'tooBig' => 'Gambar cover tidak boleh lebih dari 4 mb', 
                'wrongExtension' => 'Hanya format gambar {extensions}  yang diizinkan untuk {attribute}.', //ini pesan yg muncul saat upload tidak sesuai tipe gambar
              
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aplikasi_id' => 'Aplikasi ID',
            'aplikasi_nama' => 'Nama Aplikasi',
            'aplikasi_image' => 'Logo/Icon Aplikasi',
            'aplikasi_keterangan' => 'Keterangan Aplikasi',
            'aplikasi_url' => 'Alamat Url',
            'aplikasi_upload' => 'Temp Upload',
        ];
    }

    public function getDataAplikasiOpd(){
        $aplikasi = BagAplikasi::find()
            -> orderBy(['aplikasi_id'=>SORT_ASC])
            -> all();
        return $aplikasi;
    }
}
