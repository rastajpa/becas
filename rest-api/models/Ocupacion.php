<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ocupacion".
 *
 * @property integer $idocupacion
 * @property string $ocupacion
 * @property integer $valor
 */
class Ocupacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ocupacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ocupacion'], 'required'],
            [['valor'], 'integer'],
            [['ocupacion'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idocupacion' => 'Idocupacion',
            'ocupacion' => 'Ocupacion',
            'valor' => 'Valor',
        ];
    }
}
