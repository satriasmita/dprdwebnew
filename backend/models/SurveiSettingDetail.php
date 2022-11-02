<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "survei_setting_detail".
 *
 * @property int $id_survei
 * @property string $kode_survei
 * @property int $kode_survei_detail
 * @property string $nama_settingsurveidetail
 * @property int $nilai_surveidetail
 */
class SurveiSettingDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'survei_setting_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_survei', 'kode_survei_detail', 'nama_settingsurveidetail', 'nilai_surveidetail'], 'required'],
            [['nilai_surveidetail'], 'integer'],
            [['kode_survei'], 'string', 'max' => 5],
            [['nama_settingsurveidetail'], 'string', 'max' => 100],
            [['kode_survei_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_survei' => 'Id Survei',
            'kode_survei' => 'Kode IKM',
            'kode_survei_detail' => 'Kode IKM Detail',
            'nama_settingsurveidetail' => 'Pilihan Jawaban',
            'nilai_surveidetail' => 'Nilai',
        ];
    }

    public function getKatSurvei(){
        return $this->hasOne(SurveiKategori::className(), ['kode_survei'=>'kode_survei']);
    }

    public function getDetailSurvei(){
        return $this->hasOne(SurveiDetail::className(), ['kode_survei_detail'=>'kode_survei_detail']);
    }


}
