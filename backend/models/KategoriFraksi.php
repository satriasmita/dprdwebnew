<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori_fraksi".
 *
 * @property int $fraksi_kategori_id
 * @property string $fraksi_kat
 * @property int $fraksi_status
 */
class KategoriFraksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_fraksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fraksi_status'], 'integer'],
            [['fraksi_kat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fraksi_kategori_id' => 'Fraksi Kategori ID',
            'fraksi_kat' => 'Fraksi Kat',
            'fraksi_status' => 'Fraksi Status',
        ];
    }
}
