<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "familia".
 *
 * @property integer $idfamilia
 * @property integer $idalumno
 * @property integer $dni
 * @property string $apellido
 * @property string $nombre
 * @property integer $idparentesco
 * @property string $fechanac
 * @property integer $idocupacion
 */
class Familia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'familia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idalumno', 'dni', 'apellido', 'nombre', 'idparentesco', 'fechanac', 'idocupacion'], 'required'],
            [['idalumno', 'dni', 'idparentesco', 'idocupacion'], 'integer'],
            [['fechanac'], 'safe'],
            [['apellido', 'nombre'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfamilia' => 'Idfamilia',
            'idalumno' => 'Idalumno',
            'dni' => 'Dni',
            'apellido' => 'Apellido',
            'nombre' => 'Nombre',
            'idparentesco' => 'Idparentesco',
            'fechanac' => 'Fechanac',
            'idocupacion' => 'Idocupacion',
        ];
    }
}
