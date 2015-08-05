<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "localidad".
 *
 * @property integer $idprovincia
 * @property integer $idlocalidad
 * @property string $localidad
 */
class Localidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'localidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprovincia', 'localidad'], 'required'],
            [['idprovincia'], 'integer'],
            [['localidad'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprovincia' => 'Idprovincia',
            'idlocalidad' => 'Idlocalidad',
            'localidad' => 'Localidad',
        ];
    }
}
