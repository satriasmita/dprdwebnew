<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kesmas_kategori".
 *
 * @property int $kategori_id
 * @property string $kategori_nama
 */
class KesmasKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kesmas_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_nama'], 'required'],
            [['kategori_nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kategori_id' => 'Kategori ID',
            'kategori_nama' => 'Kategori Nama',
        ];
    }
}
