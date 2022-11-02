<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "statis_page".
 *
 * @property int $id_page
 * @property string $nama_page
 * @property int $url_page
 */
class StatisPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statis_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_page', 'url_page'], 'required'],
            // [['url_page'], 'integer'],
            [['nama_page'], 'string', 'max' => 50],
            [['url_page'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_page' => 'Id Page',
            'nama_page' => 'Nama Page',
            'url_page' => 'Url Page',
        ];
    }
}
