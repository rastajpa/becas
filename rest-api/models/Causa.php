<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "causa".
 *
 * @property integer $idcausa
 * @property string $causa
 */
class Causa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'causa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['causa'], 'required'],
            [['causa'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcausa' => 'Idcausa',
            'causa' => 'Causa',
        ];
    }
}
