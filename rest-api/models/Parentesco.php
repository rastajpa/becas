<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parentesco".
 *
 * @property integer $idparentesco
 * @property string $parentesco
 */
class Parentesco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parentesco';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parentesco'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idparentesco' => 'Idparentesco',
            'parentesco' => 'Parentesco',
        ];
    }
}
