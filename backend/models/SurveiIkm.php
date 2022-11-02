<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "survei_ikm".
 *
 * @property int $id_ikm
 * @property string $nama_surveyer
 * @property int $umur_surveyer
 * @property string $alamat_surveyer
 * @property string $pedidikan
 * @property string $pekerjaan
 * @property string $kode_survei
 * @property string $kode_survei_detail
 * @property int $nilai_survei_detail
 * @property string $create_at
 * @property string $update_at
 * @property int $create_by
 * @property int $update_by
 */
class SurveiIkm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'survei_ikm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_surveyer', 'umur_surveyer', 'alamat_surveyer', 'pedidikan', 'pekerjaan'], 'required'],
            [['umur_surveyer'], 'integer'],
            [['create_at', 'update_at', 'create_by', 'update_by'], 'safe'],
            [['nama_surveyer'], 'string', 'max' => 100],
            [['alamat_surveyer'], 'string', 'max' => 255],
            [['pedidikan', 'pekerjaan'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ikm' => 'Id Ikm',
            'nama_surveyer' => 'Nama Pengisi IKM',
            'umur_surveyer' => 'Umur',
            'alamat_surveyer' => 'Alamat',
            'pedidikan' => 'Pendidikan',
            'pekerjaan' => 'Pekerjaan',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }

    public function getIkmDetailSurvei(){
        return $this->hasMany(SurveiIkmDetail::className(), ['id_ikm'=>'id_ikm']);
    }
}
