<?php

namespace backend\models;
use yii\imagine\Image;

use Yii;

/**
 * This is the model class for table "badan".
 *
 * @property int $badan_id
 * @property string $badan_nama
 * @property string $badan_jabatan
 * @property int $badan_kategori_id
 * @property string $badan_image
 * @property string $badan_ttl
 * @property int $badan_agama
 * @property string $badan_suamiistri
 * @property string $badan_anak
 * @property string $badan_alamat
 * @property string $badan_pengalaman_organisasi
 */
class Badan extends \yii\db\ActiveRecord
{
    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'badan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['badan_kategori_id', 'badan_agama'], 'integer'],
            [['badan_alamat', 'badan_pengalaman_organisasi'], 'string'],
            [['badan_nama', 'badan_jabatan'], 'string', 'max' => 200],
            [['badan_image'], 'string', 'max' => 100],
            [['badan_ttl', 'badan_suamiistri', 'badan_anak'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'badan_id' => 'ID',
            'badan_nama' => 'Nama',
            'badan_jabatan' => 'Jabatan',
            'badan_kategori_id' => 'Badan Kategori',
            'badan_image' => 'Image',
            'badan_ttl' => 'Tempat / Tanggal Lahir',
            'badan_agama' => 'Agama',
            'badan_suamiistri' => 'Suami / istri',
            'badan_anak' => 'Anak',
            'badan_alamat' => 'Alamat',
            'badan_pengalaman_organisasi' => 'Pengalaman Organisasi',
        ];
    }

    public function upload()
    {
        // $today = date('Y-m-d-H-i-s');

        if ($this->validate()) {
            $imgFile = $this->image->tempName;
            $imgName = strtotime("now").'-thumb-'.$this->image->baseName . '.' . $this->image->extension;
            // Image::thumbnail($imgFile, 1520, 900)
            Image::thumbnail($imgFile, 570, 320)->save(Yii::getAlias('@webroot/images/Badan/'.$imgName), ['quality' => 85]);
            $this->badan_image = $imgName;
            $fileName = strtotime("now").'-'.$this->image->baseName . '.' . $this->image->extension;
            $this->badan_image = $fileName;
            $upload = $this->image->saveAs( Yii::getAlias('@webroot/images/Badan/') . $fileName);
            return $upload;
        } else {
            return false;
        }
    }

    public function getKategoriBadan()
    {
        return $this->hasOne(KategoriBadan::className(), ['badan_kategori_id' => 'badan_kategori_id']);
    }
}
