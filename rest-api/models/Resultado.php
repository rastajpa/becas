<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resultado".
 *
 * @property integer $idresultado
 * @property string $resultado
 */
class Resultado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resultado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resultado'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idresultado' => 'Idresultado',
            'resultado' => 'Resultado',
        ];
    }
}
