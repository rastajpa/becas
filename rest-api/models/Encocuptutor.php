<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encocuptutor".
 *
 * @property integer $idocuptutor
 * @property string $ocuptutor
 */
class Encocuptutor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encocuptutor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idocuptutor', 'ocuptutor'], 'required'],
            [['idocuptutor'], 'integer'],
            [['ocuptutor'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idocuptutor' => 'Idocuptutor',
            'ocuptutor' => 'Ocuptutor',
        ];
    }
}
