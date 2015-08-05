<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encfacilidad".
 *
 * @property integer $idfacil
 * @property string $facilidad
 */
class Encfacilidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encfacilidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['facilidad'], 'required'],
            [['facilidad'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfacil' => 'Idfacil',
            'facilidad' => 'Facilidad',
        ];
    }
}
