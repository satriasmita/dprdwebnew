<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "komisi".
 *
 * @property int $komisi_id
 * @property string|null $komisi_nama
 * @property string|null $komisi_jabatan
 * @property int|null $komisi_kategori_id
 * @property string|null $komisi_image
 * @property string|null $komisi_ttl
 * @property int|null $komisi_agama
 * @property string|null $komisi_suamiistri
 * @property string|null $komisi_anak
 * @property string|null $komisi_alamat
 * @property string|null $komisi_pengalaman_organisasi
 */
class Komisi extends \yii\db\ActiveRecord
{
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
            'komisi_id' => 'Komisi ID',
            'komisi_nama' => 'Komisi Nama',
            'komisi_jabatan' => 'Komisi Jabatan',
            'komisi_kategori_id' => 'Komisi Kategori ID',
            'komisi_image' => 'Komisi Image',
            'komisi_ttl' => 'Komisi Ttl',
            'komisi_agama' => 'Komisi Agama',
            'komisi_suamiistri' => 'Komisi Suamiistri',
            'komisi_anak' => 'Komisi Anak',
            'komisi_alamat' => 'Komisi Alamat',
            'komisi_pengalaman_organisasi' => 'Komisi Pengalaman Organisasi',
        ];
    }
}
