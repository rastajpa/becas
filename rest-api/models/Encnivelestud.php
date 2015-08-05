<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encnivelestud".
 *
 * @property integer $idnivelest
 * @property string $nivelest
 */
class Encnivelestud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encnivelestud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nivelest'], 'required'],
            [['nivelest'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idnivelest' => 'Idnivelest',
            'nivelest' => 'Nivelest',
        ];
    }
}
