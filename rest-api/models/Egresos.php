<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "egresos".
 *
 * @property integer $idegreso
 * @property integer $idalumno
 * @property integer $idservicio
 * @property string $monto
 * @property integer $propios
 */
class Egresos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'egresos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idalumno', 'idservicio', 'monto', 'propios'], 'required'],
            [['idalumno', 'idservicio', 'propios'], 'integer'],
            [['monto'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idegreso' => 'Idegreso',
            'idalumno' => 'Idalumno',
            'idservicio' => 'Idservicio',
            'monto' => 'Monto',
            'propios' => 'Propios',
        ];
    }
}
