<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enccomunic".
 *
 * @property integer $idcomunic
 * @property string $comunic
 */
class Enccomunic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enccomunic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comunic'], 'required'],
            [['comunic'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcomunic' => 'Idcomunic',
            'comunic' => 'Comunic',
        ];
    }
}
