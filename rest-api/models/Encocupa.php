<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encocupa".
 *
 * @property integer $idocupa
 * @property string $ocupa
 */
class Encocupa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encocupa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ocupa'], 'required'],
            [['ocupa'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idocupa' => 'Idocupa',
            'ocupa' => 'Ocupa',
        ];
    }
}
