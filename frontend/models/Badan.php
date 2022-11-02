<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "badan".
 *
 * @property int $badan_id
 * @property string|null $badan_nama
 * @property string|null $badan_jabatan
 * @property int|null $badan_kategori_id
 * @property string|null $badan_image
 * @property string|null $badan_ttl
 * @property int|null $badan_agama
 * @property string|null $badan_suamiistri
 * @property string|null $badan_anak
 * @property string|null $badan_alamat
 * @property string|null $badan_pengalaman_organisasi
 */
class Badan extends \yii\db\ActiveRecord
{
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
            'badan_id' => 'Badan ID',
            'badan_nama' => 'Badan Nama',
            'badan_jabatan' => 'Badan Jabatan',
            'badan_kategori_id' => 'Badan Kategori ID',
            'badan_image' => 'Badan Image',
            'badan_ttl' => 'Badan Ttl',
            'badan_agama' => 'Badan Agama',
            'badan_suamiistri' => 'Badan Suamiistri',
            'badan_anak' => 'Badan Anak',
            'badan_alamat' => 'Badan Alamat',
            'badan_pengalaman_organisasi' => 'Badan Pengalaman Organisasi',
        ];
    }
}
