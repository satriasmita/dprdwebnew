<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "data_instansi".
 *
 * @property int $id
 * @property string $nama_upt
 * @property string $alamat_upt
 * @property string $telp
 * @property int $no_wa
 * @property string $email
 */
class DataInstansi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_instansi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_upt', 'alamat_upt', 'telp', 'no_wa', 'email','website'], 'required'],
            [['alamat_upt'], 'string'],
            [['nama_upt', 'email','website'], 'string', 'max' => 100],
            [['telp',], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_upt' => 'Nama Instansi',
            'alamat_upt' => 'Alamat',
            'telp' => 'Telp',
            'no_wa' => 'No Whatapp',
            'email' => 'Email',
            'website' => 'Website',
        ];
    }

}
