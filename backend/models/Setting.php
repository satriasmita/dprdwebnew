<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "t_setting".
 *
 * @property string $grup_setting
 * @property string $nama_setting
 * @property int $nilai_setting
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grup_setting', 'nama_setting', 'nilai_setting'], 'required'],
            [['grup_setting'], 'string', 'max' => 150],
            [['nama_setting'], 'string', 'max' => 50],
            [['nilai_setting'], 'safe'],
            [['no_urut'], 'integer'],
            [['nama_setting'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'grup_setting' => 'Grup Setting',
            'nama_setting' => 'Nama Setting',
            'nilai_setting' => 'Nilai Setting',
        ];
    }

    public function getNamaSkpd(){
        return $this->hasOne(SkpdTbl::className(), ['KDSKPD'=>'nilai_setting']);

    }
}
