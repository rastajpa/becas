<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evaluacion".
 *
 * @property integer $idevaluacion
 * @property integer $dniE
 * @property string $apellidoE
 * @property string $nombreE
 * @property string $montotalE
 * @property integer $grufamE
 * @property integer $idpropietarioE
 * @property integer $idocupacionE
 * @property integer $idinstruccionE
 * @property integer $idsaludE
 * @property integer $iddistanciaE
 * @property integer $causa1
 * @property integer $causa2
 * @property integer $causa3
 * @property integer $causa4
 * @property string $comentarioE
 * @property integer $userE
 */
class Evaluacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'evaluacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dniE', 'comentarioE', 'userE'], 'required'],
            [['dniE', 'grufamE', 'idpropietarioE', 'idocupacionE', 'idinstruccionE', 'idsaludE', 'iddistanciaE', 'causa1', 'causa2', 'causa3', 'causa4', 'userE'], 'integer'],
            [['montotalE'], 'number'],
            [['apellidoE'], 'string', 'max' => 45],
            [['nombreE'], 'string', 'max' => 50],
            [['comentarioE'], 'string', 'max' => 150],
            [['dniE'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idevaluacion' => 'Idevaluacion',
            'dniE' => 'Dni E',
            'apellidoE' => 'Apellido E',
            'nombreE' => 'Nombre E',
            'montotalE' => 'Montotal E',
            'grufamE' => 'Grufam E',
            'idpropietarioE' => 'Idpropietario E',
            'idocupacionE' => 'Idocupacion E',
            'idinstruccionE' => 'Idinstruccion E',
            'idsaludE' => 'Idsalud E',
            'iddistanciaE' => 'Iddistancia E',
            'causa1' => 'Causa1',
            'causa2' => 'Causa2',
            'causa3' => 'Causa3',
            'causa4' => 'Causa4',
            'comentarioE' => 'Comentario E',
            'userE' => 'User E',
        ];
    }
}
