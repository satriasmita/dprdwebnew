<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "survei_ikm_detail".
 *
 * @property int $id_detail
 * @property int $id_ikm
 * @property string $kode_survei
 * @property string $kode_survei_detail
 * @property int $nilai_survei_detail
 * @property string $create_at
 * @property string $update_at
 * @property int $create_by
 * @property int $update_by
 *
 * @property SurveiIkm $ikm
 */
class SurveiIkmDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'survei_ikm_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ikm', 'kode_survei_detail'], 'required'],
            [['id_ikm','create_by', 'update_by'], 'integer'],
            [['create_at', 'update_at', 'nilai_survei_detail'], 'safe'],
            [['kode_survei'], 'string', 'max' => 100],
            [['kode_survei_detail'], 'string', 'max' => 255],
            [['id_ikm'], 'exist', 'skipOnError' => true, 'targetClass' => SurveiIkm::className(), 'targetAttribute' => ['id_ikm' => 'id_ikm']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id Detail',
            'id_ikm' => 'Id Ikm',
            'kode_survei' => 'Kode Survei',
            'kode_survei_detail' => 'Kode Survei Detail',
            'nilai_survei_detail' => 'Nilai Survei Detail',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }

    /**
     * Gets query for [[Ikm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIkm()
    {
        return $this->hasOne(SurveiIkm::className(), ['id_ikm' => 'id_ikm']);
    }
}
