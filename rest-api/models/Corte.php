<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "corte".
 *
 * @property string $valorcorte
 */
class Corte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'corte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valorcorte'], 'required'],
            [['valorcorte'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'valorcorte' => 'Valorcorte',
        ];
    }
}
