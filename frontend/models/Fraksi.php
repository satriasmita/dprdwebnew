<?php

namespace frontend\models;

use Yii;

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
            'fraksi_id' => 'Fraksi ID',
            'fraksi_nama' => 'Fraksi Nama',
            'fraksi_jabatan' => 'Fraksi Jabatan',
            'fraksi_kategori_id' => 'Fraksi Kategori ID',
            'fraksi_image' => 'Fraksi Image',
            'fraksi_ttl' => 'Fraksi Ttl',
            'fraksi_agama' => 'Fraksi Agama',
            'fraksi_suamiistri' => 'Fraksi Suamiistri',
            'fraksi_anak' => 'Fraksi Anak',
            'fraksi_alamat' => 'Fraksi Alamat',
            'fraksi_pengalaman_organisasi' => 'Fraksi Pengalaman Organisasi',
        ];
    }
}
