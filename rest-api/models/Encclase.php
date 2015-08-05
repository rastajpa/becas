<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encclase".
 *
 * @property integer $idclase
 * @property string $clase
 */
class Encclase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encclase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clase'], 'required'],
            [['clase'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idclase' => 'Idclase',
            'clase' => 'Clase',
        ];
    }
}
