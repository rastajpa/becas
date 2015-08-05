<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encategoria".
 *
 * @property integer $idcategoria
 * @property string $categoria
 */
class Encategoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encategoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoria'], 'required'],
            [['categoria'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcategoria' => 'Idcategoria',
            'categoria' => 'Categoria',
        ];
    }
}
