<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salud".
 *
 * @property integer $idcobertura
 * @property string $cobertura
 * @property integer $valor
 */
class Salud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'salud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor'], 'integer'],
            [['cobertura'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcobertura' => 'Idcobertura',
            'cobertura' => 'Cobertura',
            'valor' => 'Valor',
        ];
    }
}
