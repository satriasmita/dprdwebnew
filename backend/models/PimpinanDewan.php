<?php

namespace backend\models;
use yii\imagine\Image;

use Yii;

/**
 * This is the model class for table "pimpinan_dewan".
 *
 * @property int $pimpinan_id
 * @property string|null $pimpinan_image
 * @property string|null $pimpinan_ttl
 * @property int|null $pimpinan_agama
 * @property string|null $pimpinan_suamiistri
 * @property string|null $pimpinan_anak
 * @property string|null $pimpinan_alamat
 * @property string|null $pimpinan_pengalaman_organisasi
 */
class PimpinanDewan extends \yii\db\ActiveRecord
{

    public $image;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pimpinan_dewan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pimpinan_agama'], 'integer'],
            [['pimpinan_alamat', 'pimpinan_pengalaman_organisasi'], 'string'],
            [['pimpinan_nama', 'pimpinan_jabatan'], 'string', 'max' => 100],
            [['pimpinan_image'], 'string', 'max' => 255],
            [['pimpinan_ttl'], 'string', 'max' => 200],
            [['pimpinan_suamiistri', 'pimpinan_anak'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pimpinan_id' => 'Pimpinan ID',
            'pimpinan_nama' => 'Nama',
            'pimpinan_jabatan' => 'Jabatan',
            'pimpinan_image' => 'Pimpinan Image',
            'pimpinan_ttl' => 'Pimpinan Ttl',
            'pimpinan_agama' => 'Pimpinan Agama',
            'pimpinan_suamiistri' => 'Pimpinan Suamiistri',
            'pimpinan_anak' => 'Pimpinan Anak',
            'pimpinan_alamat' => 'Pimpinan Alamat',
            'pimpinan_pengalaman_organisasi' => 'Pimpinan Pengalaman Organisasi',
        ];
    }

    public function upload()
    {
        // $today = date('Y-m-d-H-i-s');

        if ($this->validate()) {
            $imgFile = $this->image->tempName;
            $imgName = strtotime("now").'-thumb-'.$this->image->baseName . '.' . $this->image->extension;
            // Image::thumbnail($imgFile, 1520, 900)
            Image::thumbnail($imgFile, 570, 320)->save(Yii::getAlias('@webroot/images/Dewan/'.$imgName), ['quality' => 85]);
            $this->pimpinan_image = $imgName;
            $fileName = strtotime("now").'-'.$this->image->baseName . '.' . $this->image->extension;
            $this->pimpinan_image = $fileName;
            $upload = $this->image->saveAs( Yii::getAlias('@webroot/images/Dewan/') . $fileName);
            return $upload;
        } else {
            return false;
        }
    }
}
