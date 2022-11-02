<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
use yii\imagine\Image;
/**
 * This is the model class for table "komisi".
 *
 * @property int $komisi_id
 * @property string $komisi_nama
 * @property string $komisi_jabatan
 * @property int $komisi_kategori_id
 * @property string $komisi_image
 * @property string $komisi_ttl
 * @property int $komisi_agama
 * @property string $komisi_suamiistri
 * @property string $komisi_anak
 * @property string $komisi_alamat
 * @property string $komisi_pengalaman_organisasi
 */
class Komisi extends \yii\db\ActiveRecord
{
    public $image;
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'komisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['komisi_kategori_id', 'komisi_agama'], 'integer'],
            [['komisi_alamat', 'komisi_pengalaman_organisasi'], 'string'],
            [['komisi_nama', 'komisi_jabatan'], 'string', 'max' => 200],
            [['komisi_image'], 'string', 'max' => 100],
            [['komisi_ttl', 'komisi_suamiistri', 'komisi_anak'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'komisi_id' => 'ID',
            'komisi_nama' => 'Nama',
            'komisi_jabatan' => 'Jabatan',
            'komisi_kategori_id' => 'Komisi Kategori',
            'komisi_image' => 'Image',
            'komisi_ttl' => 'Tempat / Tanggal Lahir',
            'komisi_agama' => 'Agama',
            'komisi_suamiistri' => 'Suami / istri',
            'komisi_anak' => 'Anak',
            'komisi_alamat' => 'Alamat',
            'komisi_pengalaman_organisasi' => 'Pengalaman Organisasi',
        ];
    }

    public function upload()
    {
        // $today = date('Y-m-d-H-i-s');

        if ($this->validate()) {
            $imgFile = $this->image->tempName;
            $imgName = strtotime("now").'-thumb-'.$this->image->baseName . '.' . $this->image->extension;
            // Image::thumbnail($imgFile, 1520, 900)
            Image::thumbnail($imgFile, 570, 320)->save(Yii::getAlias('@webroot/images/Komisi/'.$imgName), ['quality' => 85]);
            $this->komisi_image = $imgName;
            $fileName = strtotime("now").'-'.$this->image->baseName . '.' . $this->image->extension;
            $this->komisi_image = $fileName;
            $upload = $this->image->saveAs( Yii::getAlias('@webroot/images/Komisi/') . $fileName);
            return $upload;
        } else {
            return false;
        }
    }

    public function getKategoriKomisi()
    {
        return $this->hasOne(KategoriKomisi::className(), ['komisi_kategori_id' => 'komisi_kategori_id']);
    }

}
