<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kepalauptopd".
 *
 * @property int $id
 * @property string $NIP
 * @property string $jabatan
 * @property int $status
 */
class Kepalauptopd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kepalauptopd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIP', 'jabatan', 'status'], 'required'],
            [['status'], 'integer'],
            [['NIP'], 'string', 'max' => 20],
            [['jabatan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'NIP' => 'Nip',
            'jabatan' => 'Jabatan',
            'status' => 'Status',
        ];
    }

    public function getNamaPegawai(){
        return $this->hasOne(Mstpegawai::className(), ['NIP'=>'NIP']);
    }

    public function getFotoKadis(){
        return $this->hasOne(Pegawaifoto::className(), ['pegawai_nip'=>'NIP']);
    }
}
