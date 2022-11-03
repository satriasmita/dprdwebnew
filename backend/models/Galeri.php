<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "galeri".
 *
 * @property int $galeri_id
 * @property string|null $galeri_title
 * @property string|null $galeri_image
 * @property string|null $galeri_desc
 * @property string|null $galeri_date
 * @property int|null $galeri_status
 */
class Galeri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galeri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['galeri_desc'], 'string'],
            [['galeri_date'], 'safe'],
            [['galeri_status'], 'integer'],
            [['galeri_title'], 'string', 'max' => 100],
            [['galeri_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'galeri_id' => 'Galeri ID',
            'galeri_title' => 'Galeri Title',
            'galeri_image' => 'Galeri Image',
            'galeri_desc' => 'Galeri Desc',
            'galeri_date' => 'Galeri Date',
            'galeri_status' => 'Galeri Status',
        ];
    }
}
