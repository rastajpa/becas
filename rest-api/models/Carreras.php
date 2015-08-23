<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carreras".
 *
 * @property integer $idfacultad
 * @property integer $idcarrera
 * @property string $carrera
 * @property string $plan
 * @property integer $duracion
 * @property integer $idnivelC
 * @property integer $anio1
 * @property integer $anio2
 * @property integer $anio3
 * @property integer $anio4
 * @property integer $anio5
 * @property integer $anio6
 * @property integer $anio7
 */
class Carreras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carreras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idfacultad', 'carrera', 'plan', 'duracion', 'idnivelC', 'anio1', 'anio2', 'anio3', 'anio4', 'anio5', 'anio6', 'anio7'], 'required'],
            [['idfacultad', 'duracion', 'idnivelC', 'anio1', 'anio2', 'anio3', 'anio4', 'anio5', 'anio6', 'anio7'], 'integer'],
            [['carrera'], 'string', 'max' => 200],
            [['plan'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfacultad' => 'Idfacultad',
            'idcarrera' => 'Idcarrera',
            'carrera' => 'Carrera',
            'plan' => 'Plan',
            'duracion' => 'Duracion',
            'idnivelC' => 'Idnivel C',
            'anio1' => 'Anio1',
            'anio2' => 'Anio2',
            'anio3' => 'Anio3',
            'anio4' => 'Anio4',
            'anio5' => 'Anio5',
            'anio6' => 'Anio6',
            'anio7' => 'Anio7',
        ];
    }
}
