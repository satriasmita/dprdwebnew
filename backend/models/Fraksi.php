<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * This is the model class for table "fraksi".
 *
 * @property int $fraksi_id
 * @property string $fraksi_nama
 * @property string $fraksi_jabatan
 * @property int $fraksi_kategori_id
 * @property string $fraksi_image
 * @property string $fraksi_ttl
 * @property int $fraksi_agama
 * @property string $fraksi_suamiistri
 * @property string $fraksi_anak
 * @property string $fraksi_alamat
 * @property string $fraksi_pengalaman_organisasi
 */
class Fraksi extends \yii\db\ActiveRecord
{
    public $image;
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fraksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fraksi_kategori_id', 'fraksi_agama'], 'integer'],
            [['fraksi_alamat', 'fraksi_pengalaman_organisasi'], 'string'],
            [['fraksi_nama', 'fraksi_jabatan'], 'string', 'max' => 200],
            [['fraksi_image'], 'string', 'max' => 100],
            [['fraksi_ttl', 'fraksi_suamiistri', 'fraksi_anak'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fraksi_id' => 'ID',
            'fraksi_nama' => 'Nama',
            'fraksi_jabatan' => 'Jabatan',
            'fraksi_kategori_id' => 'Kategori Fraksi',
            'fraksi_image' => 'Photo',
            'fraksi_ttl' => 'Tempat / Tanggal Lahir',
            'fraksi_agama' => 'Agama',
            'fraksi_suamiistri' => 'Suami / istri',
            'fraksi_anak' => 'Nama Anak',
            'fraksi_alamat' => 'Alamat',
            'fraksi_pengalaman_organisasi' => 'Pengalaman Organisasi',
        ];
    }

    public function upload()
    {
        // $today = date('Y-m-d-H-i-s');

        if ($this->validate()) {
            $imgFile = $this->image->tempName;
            $imgName = strtotime("now").'-thumb-'.$this->image->baseName . '.' . $this->image->extension;
            // Image::thumbnail($imgFile, 1520, 900)
            Image::thumbnail($imgFile, 570, 320)->save(Yii::getAlias('@webroot/images/Fraksi/'.$imgName), ['quality' => 85]);
            $this->fraksi_image = $imgName;
            $fileName = strtotime("now").'-'.$this->image->baseName . '.' . $this->image->extension;
            $this->fraksi_image = $fileName;
            $upload = $this->image->saveAs( Yii::getAlias('@webroot/images/Fraksi/') . $fileName);
            return $upload;
        } else {
            return false;
        }
    }

    public function getKategoriFraksi()
    {
        return $this->hasOne(KategoriFraksi::className(), ['fraksi_kategori_id' => 'fraksi_kategori_id']);
    }
}
