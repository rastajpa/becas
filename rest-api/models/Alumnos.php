<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property integer $idalumno
 * @property integer $dni
 * @property string $cuil
 * @property string $apellido
 * @property string $nombre
 * @property string $fechanac
 * @property string $nacion
 * @property integer $idsexo
 * @property integer $idsalud
 * @property integer $discapacidad
 * @property integer $originario
 * @property integer $grufam
 * @property integer $idpropietario
 * @property integer $idinstruccion
 * @property integer $idocupacion
 * @property string $montotal
 * @property integer $becario
 * @property integer $idcarrera
 * @property integer $anioingreso
 * @property integer $anioingresou
 * @property integer $asistencia
 * @property string $promedio
 * @property string $observaciones
 * @property integer $idconvocatoria
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dni', 'cuil', 'apellido', 'nombre', 'fechanac', 'nacion', 'idsexo', 'idsalud', 'discapacidad', 'originario', 'grufam', 'idpropietario', 'idinstruccion', 'idocupacion', 'montotal', 'becario', 'idcarrera', 'anioingreso', 'anioingresou', 'promedio', 'observaciones', 'idconvocatoria'], 'required'],
            [['dni', 'cuil', 'idsexo', 'idsalud', 'discapacidad', 'originario', 'grufam', 'idpropietario', 'idinstruccion', 'idocupacion', 'becario', 'idcarrera', 'anioingreso', 'anioingresou', 'asistencia', 'idconvocatoria'], 'integer'],
            [['fechanac'], 'safe'],
            [['montotal', 'promedio'], 'number'],
            [['observaciones'], 'string'],
            [['apellido', 'nombre'], 'string', 'max' => 60],
            [['nacion'], 'string', 'max' => 20],
            [['dni'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idalumno' => 'Idalumno',
            'dni' => 'Dni',
            'cuil' => 'Cuil',
            'apellido' => 'Apellido',
            'nombre' => 'Nombre',
            'fechanac' => 'Fechanac',
            'nacion' => 'Nacion',
            'idsexo' => 'Idsexo',
            'idsalud' => 'Idsalud',
            'discapacidad' => 'Discapacidad',
            'originario' => 'Originario',
            'grufam' => 'Grufam',
            'idpropietario' => 'Idpropietario',
            'idinstruccion' => 'Idinstruccion',
            'idocupacion' => 'Idocupacion',
            'montotal' => 'Montotal',
            'becario' => 'Becario',
            'idcarrera' => 'Idcarrera',
            'anioingreso' => 'Anioingreso',
            'anioingresou' => 'Anioingresou',
            'asistencia' => 'Asistencia',
            'promedio' => 'Promedio',
            'observaciones' => 'Observaciones',
            'idconvocatoria' => 'Idconvocatoria',
        ];
    }
}
