<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property int $agenda_id
 * @property string|null $agenda_waktu
 * @property string|null $agenda_tempat
 * @property string|null $agenda_pukul
 * @property string|null $agenda_penjelasan
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agenda_penjelasan'], 'string'],
            [['agenda_waktu', 'agenda_tempat', 'agenda_pukul'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'agenda_id' => 'Agenda ID',
            'agenda_waktu' => 'Agenda Waktu',
            'agenda_tempat' => 'Agenda Tempat',
            'agenda_pukul' => 'Agenda Pukul',
            'agenda_penjelasan' => 'Agenda Penjelasan',
        ];
    }


    public function getDetailAgenda(){
        $detailage = Static::find()
                -> orderBy(['agenda_id'=>SORT_ASC])
                -> all();
        return $detailage;
    }

}
