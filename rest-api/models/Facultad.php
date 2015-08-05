<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facultad".
 *
 * @property integer $idfacultad
 * @property string $facultad
 */
class Facultad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facultad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['facultad'], 'required'],
            [['facultad'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfacultad' => 'Idfacultad',
            'facultad' => 'Facultad',
        ];
    }
}
