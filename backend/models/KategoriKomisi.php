<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori_komisi".
 *
 * @property int $komisi_kategori_id
 * @property string $komisi_kategori
 */
class KategoriKomisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_komisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['komisi_kategori'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'komisi_kategori_id' => 'Komisi Kategori ID',
            'komisi_kategori' => 'Komisi Kategori',
        ];
    }
}
