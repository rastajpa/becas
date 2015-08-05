<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "propietario".
 *
 * @property integer $idpropietario
 * @property string $propietario
 * @property integer $valor
 */
class Propietario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'propietario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['propietario', 'valor'], 'required'],
            [['valor'], 'integer'],
            [['propietario'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpropietario' => 'Idpropietario',
            'propietario' => 'Propietario',
            'valor' => 'Valor',
        ];
    }
}
