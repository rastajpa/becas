<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encmono".
 *
 * @property integer $idtributo
 * @property string $tributo
 */
class Encmono extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encmono';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tributo'], 'required'],
            [['tributo'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtributo' => 'Idtributo',
            'tributo' => 'Tributo',
        ];
    }
}
