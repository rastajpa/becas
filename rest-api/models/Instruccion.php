<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instruccion".
 *
 * @property integer $idinstruccion
 * @property string $instruccion
 * @property integer $valor
 */
class Instruccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instruccion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instruccion', 'valor'], 'required'],
            [['valor'], 'integer'],
            [['instruccion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idinstruccion' => 'Idinstruccion',
            'instruccion' => 'Instruccion',
            'valor' => 'Valor',
        ];
    }
}
