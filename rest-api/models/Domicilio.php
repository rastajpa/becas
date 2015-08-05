<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "domicilio".
 *
 * @property integer $iddomicilio
 * @property integer $idalumno
 * @property string $calle
 * @property integer $numcasa
 * @property integer $piso
 * @property string $dpto
 * @property string $barrio
 * @property integer $idlocalidad
 * @property integer $iddistancia
 * @property string $depto
 * @property integer $codpost
 * @property integer $codareaT
 * @property string $telefono
 * @property integer $codareaC
 * @property integer $celular
 * @property integer $convive
 */
class Domicilio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'domicilio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idalumno'], 'required'],
            [['idalumno', 'numcasa', 'piso', 'idlocalidad', 'iddistancia', 'codpost', 'codareaT', 'codareaC', 'celular', 'convive'], 'integer'],
            [['calle'], 'string', 'max' => 120],
            [['dpto'], 'string', 'max' => 4],
            [['barrio'], 'string', 'max' => 20],
            [['depto'], 'string', 'max' => 40],
            [['telefono'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddomicilio' => 'Iddomicilio',
            'idalumno' => 'Idalumno',
            'calle' => 'Calle',
            'numcasa' => 'Numcasa',
            'piso' => 'Piso',
            'dpto' => 'Dpto',
            'barrio' => 'Barrio',
            'idlocalidad' => 'Idlocalidad',
            'iddistancia' => 'Iddistancia',
            'depto' => 'Depto',
            'codpost' => 'Codpost',
            'codareaT' => 'Codarea T',
            'telefono' => 'Telefono',
            'codareaC' => 'Codarea C',
            'celular' => 'Celular',
            'convive' => 'Convive',
        ];
    }
}
