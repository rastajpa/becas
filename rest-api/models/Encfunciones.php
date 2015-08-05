<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encfunciones".
 *
 * @property integer $idfunciones
 * @property string $funciones
 */
class Encfunciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encfunciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['funciones'], 'required'],
            [['funciones'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfunciones' => 'Idfunciones',
            'funciones' => 'Funciones',
        ];
    }
}
