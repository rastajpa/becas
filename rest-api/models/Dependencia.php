<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dependencia".
 *
 * @property integer $iddependencia
 * @property string $categoria
 * @property integer $valor
 */
class Dependencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iddependencia', 'valor'], 'integer'],
            [['categoria'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddependencia' => 'Iddependencia',
            'categoria' => 'Categoria',
            'valor' => 'Valor',
        ];
    }
}
