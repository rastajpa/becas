<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encplazo".
 *
 * @property integer $idplazo
 * @property string $plazo
 */
class Encplazo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encplazo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plazo'], 'required'],
            [['plazo'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idplazo' => 'Idplazo',
            'plazo' => 'Plazo',
        ];
    }
}
