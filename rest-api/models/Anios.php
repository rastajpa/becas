<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anios".
 *
 * @property integer $idanio
 * @property string $anio
 */
class Anios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anio'], 'required'],
            [['anio'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idanio' => 'Idanio',
            'anio' => 'Anio',
        ];
    }
}
