<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "survei_kategori".
 *
 * @property string $kode_survei
 * @property string $nama_survei
 */
class SurveiKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'survei_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_survei', 'nama_survei'], 'required'],
            [['kode_survei'], 'string', 'max' => 5],
            [['nama_survei'], 'string', 'max' => 255],
            [['kode_survei'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_survei' => 'Kode IKM',
            'nama_survei' => 'Jenis Pertanyaan',
        ];
    }

    public function getKategoriSurvei(){
        $kategori = SurveiKategori::find()-> all();
        $dropDown = \yii\helpers\ArrayHelper::map($kategori,'kode_survei','nama_survei');
        return $dropDown;
    }
}
