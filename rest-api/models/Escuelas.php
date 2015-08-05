<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escuelas".
 *
 * @property integer $idescuela
 * @property string $escuela
 */
class Escuelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'escuelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idescuela', 'escuela'], 'required'],
            [['idescuela'], 'integer'],
            [['escuela'], 'string', 'max' => 40],
            [['idescuela'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idescuela' => 'Idescuela',
            'escuela' => 'Escuela',
        ];
    }
}
