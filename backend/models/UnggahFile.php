<?php

namespace backend\models;

use Yii;
use amnah\yii2\user\models\User;

/**
 * This is the model class for table "unggah_file".
 *
 * @property int $id_unggah
 * @property string $jenis_unggah
 * @property string $nama_unggah
 * @property string $keterangan_unggah
 * @property string $lokasi_unggah
 * @property string $tanggal_unggah
 * @property int $unggah_oleh
 * @property int $status_unggah
 */
class UnggahFile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unggah_file';
    }

    /**
     * {@inheritdoc}
     */
    public $upload_file;
    public function rules()
    {
        return [
            [['jenis_unggah', 'nama_unggah', 'tanggal_unggah', 'unggah_oleh', 'status_unggah'], 'required'],
            [['keterangan_unggah'], 'string'],
            [['tanggal_unggah'], 'safe'],
            [['unggah_oleh', 'status_unggah'], 'integer'],
            [['jenis_unggah'], 'string', 'max' => 30],
            [['nama_unggah'], 'string', 'max' => 100],
            [['lokasi_unggah','alamat_url'], 'string', 'max' => 255],

            [['upload_file',],'required','on'=>['create']],  //ini wajib diisi saat create
            ['upload_file', 'file', 'extensions' => ['pdf'],  //ini extensin gambar yg kita iziznin upload
                //'maxSize' => 1024 * 1024 * 4, 
                //'tooBig' => 'Gambar cover tidak boleh lebih dari 4 mb', 
                'wrongExtension' => 'Hanya format file {extensions}  yang diizinkan untuk {attribute}.', //ini pesan yg muncul saat upload tidak sesuai tipe gambar
              
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_unggah' => 'Id Unggah',
            'jenis_unggah' => 'Jenis Unggah',
            'nama_unggah' => 'Nama Unggah',
            'keterangan_unggah' => 'Keterangan Unggah',
            'lokasi_unggah' => 'Lokasi Unggah',
            'alamat_url' => 'Alamat URL',
            'tanggal_unggah' => 'Tanggal Unggah',
            'unggah_oleh' => 'Unggah Oleh',
            'status_unggah' => 'Status Unggah',
            'upload_file' => 'Upload File',
        ];
    }

    public function tglIndo($tanggal_unggah){
        $bulan = array(
            1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
        );
        
        $pecahkan = explode('-', $tanggal_unggah);

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0]; 
    }

     public function getAuthorCreate(){
        return $this->hasOne(User::className(), ['id'=>'unggah_oleh']);
    }

     public function getListUnggah(){

         $file = UnggahFile::find()->all();

        return $file;
    }
}
