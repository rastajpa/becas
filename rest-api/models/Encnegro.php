<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encnegro".
 *
 * @property integer $idnegro
 * @property string $negro
 */
class Encnegro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encnegro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['negro'], 'required'],
            [['negro'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idnegro' => 'Idnegro',
            'negro' => 'Negro',
        ];
    }
}
