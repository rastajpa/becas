<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $idusuarios
 * @property integer $usuario
 * @property string $clave
 * @property string $email
 * @property integer $permiso
 * @property string $fechaserver
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario', 'clave', 'permiso'], 'required'],
            [['usuario', 'permiso'], 'integer'],
            [['fechaserver'], 'safe'],
            [['clave'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 60],
            [['usuario'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuarios' => 'Idusuarios',
            'usuario' => 'Usuario',
            'clave' => 'Clave',
            'email' => 'Email',
            'permiso' => 'Permiso',
            'fechaserver' => 'Fechaserver',
        ];
    }
}
