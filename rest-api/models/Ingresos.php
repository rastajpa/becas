<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingresos".
 *
 * @property integer $idingreso
 * @property string $ingreso
 */
class Ingresos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ingresos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ingreso'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idingreso' => 'Idingreso',
            'ingreso' => 'Ingreso',
        ];
    }
}
