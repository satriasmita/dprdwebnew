<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "survei_detail".
 *
 * @property int $kode_survei_detail
 * @property string $kode_survei
 * @property string $nama_survei_detail
 * @property string $jenis_input
 */
class SurveiDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'survei_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_survei', 'nama_survei_detail', 'jenis_input'], 'required'],
            [['kode_survei'], 'string', 'max' => 5],
            [['nama_survei_detail'], 'string', 'max' => 255],
            [['jenis_input'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_survei_detail' => 'Kode IKM Detail',
            'kode_survei' => 'Kode IKM',
            'nama_survei_detail' => 'Pertanyaan',
            'jenis_input' => 'Jenis Input',
        ];
    }

    public function getKatSurvei(){
        return $this->hasOne(SurveiKategori::className(), ['kode_survei'=>'kode_survei']);
    }
}
