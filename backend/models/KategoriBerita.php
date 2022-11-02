<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori_berita".
 *
 * @property int $kategori_id
 * @property string $kategori_name
 */
class KategoriBerita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kategori_id' => 'Kategori ID',
            'kategori_name' => 'Kategori Name',
        ];
    }
}
