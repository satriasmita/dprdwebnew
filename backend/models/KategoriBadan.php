<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori_badan".
 *
 * @property int $badan_kategori_id
 * @property string $badan_kategori
 */
class KategoriBadan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_badan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['badan_kategori'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'badan_kategori_id' => 'Badan Kategori ID',
            'badan_kategori' => 'Badan Kategori',
        ];
    }
}
