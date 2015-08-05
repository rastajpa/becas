<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "secundarias".
 *
 * @property integer $idsec
 * @property integer $dni
 * @property string $apellido
 * @property string $nombre
 * @property integer $escuela
 * @property integer $resultado
 * @property string $causa
 */
class Secundarias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'secundarias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dni', 'apellido', 'nombre', 'escuela', 'resultado', 'causa'], 'required'],
            [['dni', 'escuela', 'resultado'], 'integer'],
            [['apellido', 'nombre', 'causa'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idsec' => 'Idsec',
            'dni' => 'Dni',
            'apellido' => 'Apellido',
            'nombre' => 'Nombre',
            'escuela' => 'Escuela',
            'resultado' => 'Resultado',
            'causa' => 'Causa',
        ];
    }
}
