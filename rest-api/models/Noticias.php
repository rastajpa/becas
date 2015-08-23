<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property integer $idnoticia
 * @property string $titulo
 * @property string $imagen
 * @property string $fecha
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idnoticia', 'titulo', 'imagen', 'fecha'], 'required'],
            [['idnoticia'], 'integer'],
            [['fecha'], 'safe'],
            [['titulo', 'imagen'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idnoticia' => 'Idnoticia',
            'titulo' => 'Titulo',
            'imagen' => 'Imagen',
            'fecha' => 'Fecha',
        ];
    }
}
