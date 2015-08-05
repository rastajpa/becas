<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nivel".
 *
 * @property integer $idnivel
 * @property string $nivel
 */
class Nivel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nivel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nivel'], 'required'],
            [['nivel'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idnivel' => 'Idnivel',
            'nivel' => 'Nivel',
        ];
    }
}
