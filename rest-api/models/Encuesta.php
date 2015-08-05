<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encuesta".
 *
 * @property integer $idencuesta
 * @property integer $edad
 * @property integer $sexo
 * @property integer $pais
 * @property integer $idlocalidad
 * @property integer $publica
 * @property integer $instit2
 * @property integer $cual
 * @property integer $ocupa
 * @property integer $tributo
 * @property integer $negro
 * @property integer $ocuptutor
 * @property integer $categoria
 * @property integer $funciones
 * @property integer $nivelestP
 * @property integer $nivelestM
 * @property integer $nivSoc
 * @property integer $idcomunic1
 * @property integer $idcomunic2
 * @property integer $idcomunic3
 * @property integer $idcomunic4
 * @property integer $idcomunic5
 * @property integer $idcomunic6
 * @property integer $idcomunic7
 * @property integer $idcomunic8
 * @property integer $idcomunic9
 * @property integer $idcomunic10
 * @property integer $idcomunic11
 * @property integer $idcomunic12
 * @property integer $tramit
 * @property integer $document
 * @property integer $plazo
 * @property integer $trato
 */
class Encuesta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encuesta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['edad', 'sexo', 'pais', 'idlocalidad', 'publica', 'instit2', 'cual', 'ocupa', 'tributo', 'categoria', 'funciones', 'nivelestP', 'nivelestM', 'nivSoc', 'idcomunic1', 'idcomunic2', 'idcomunic3', 'idcomunic4', 'idcomunic5', 'idcomunic6', 'idcomunic7', 'idcomunic8', 'idcomunic9', 'idcomunic10', 'idcomunic11', 'idcomunic12', 'tramit', 'document', 'plazo', 'trato'], 'required'],
            [['edad', 'sexo', 'pais', 'idlocalidad', 'publica', 'instit2', 'cual', 'ocupa', 'tributo', 'negro', 'ocuptutor', 'categoria', 'funciones', 'nivelestP', 'nivelestM', 'nivSoc', 'idcomunic1', 'idcomunic2', 'idcomunic3', 'idcomunic4', 'idcomunic5', 'idcomunic6', 'idcomunic7', 'idcomunic8', 'idcomunic9', 'idcomunic10', 'idcomunic11', 'idcomunic12', 'tramit', 'document', 'plazo', 'trato'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idencuesta' => 'Idencuesta',
            'edad' => 'Edad',
            'sexo' => 'Sexo',
            'pais' => 'Pais',
            'idlocalidad' => 'Idlocalidad',
            'publica' => 'Publica',
            'instit2' => 'Instit2',
            'cual' => 'Cual',
            'ocupa' => 'Ocupa',
            'tributo' => 'Tributo',
            'negro' => 'Negro',
            'ocuptutor' => 'Ocuptutor',
            'categoria' => 'Categoria',
            'funciones' => 'Funciones',
            'nivelestP' => 'Nivelest P',
            'nivelestM' => 'Nivelest M',
            'nivSoc' => 'Niv Soc',
            'idcomunic1' => 'Idcomunic1',
            'idcomunic2' => 'Idcomunic2',
            'idcomunic3' => 'Idcomunic3',
            'idcomunic4' => 'Idcomunic4',
            'idcomunic5' => 'Idcomunic5',
            'idcomunic6' => 'Idcomunic6',
            'idcomunic7' => 'Idcomunic7',
            'idcomunic8' => 'Idcomunic8',
            'idcomunic9' => 'Idcomunic9',
            'idcomunic10' => 'Idcomunic10',
            'idcomunic11' => 'Idcomunic11',
            'idcomunic12' => 'Idcomunic12',
            'tramit' => 'Tramit',
            'document' => 'Document',
            'plazo' => 'Plazo',
            'trato' => 'Trato',
        ];
    }
}
