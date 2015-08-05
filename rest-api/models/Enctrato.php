<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enctrato".
 *
 * @property integer $idtrato
 * @property string $trato
 */
class Enctrato extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enctrato';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trato'], 'required'],
            [['trato'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtrato' => 'Idtrato',
            'trato' => 'Trato',
        ];
    }
}
