<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aprobadas".
 *
 * @property integer $dniAp
 * @property integer $idcarreraA
 * @property string $planA
 * @property string $promA
 * @property integer $anioingresoU
 * @property integer $regularA
 * @property integer $apA1
 * @property integer $apA2
 * @property integer $apA3
 * @property integer $apA4
 * @property integer $apA5
 * @property integer $apA6
 * @property integer $apA7
 */
class Aprobadas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aprobadas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dniAp', 'idcarreraA', 'planA', 'promA', 'anioingresoU', 'regularA'], 'required'],
            [['dniAp', 'idcarreraA', 'anioingresoU', 'regularA', 'apA1', 'apA2', 'apA3', 'apA4', 'apA5', 'apA6', 'apA7'], 'integer'],
            [['promA'], 'number'],
            [['planA'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dniAp' => 'Dni Ap',
            'idcarreraA' => 'Idcarrera A',
            'planA' => 'Plan A',
            'promA' => 'Prom A',
            'anioingresoU' => 'Anioingreso U',
            'regularA' => 'Regular A',
            'apA1' => 'Ap A1',
            'apA2' => 'Ap A2',
            'apA3' => 'Ap A3',
            'apA4' => 'Ap A4',
            'apA5' => 'Ap A5',
            'apA6' => 'Ap A6',
            'apA7' => 'Ap A7',
        ];
    }
}
