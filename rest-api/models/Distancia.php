<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distancia".
 *
 * @property integer $iddistancia
 * @property string $distancia
 * @property string $valor
 */
class Distancia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'distancia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor'], 'number'],
            [['distancia'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddistancia' => 'Iddistancia',
            'distancia' => 'Distancia',
            'valor' => 'Valor',
        ];
    }
}
