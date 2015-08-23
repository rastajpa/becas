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
 * @property string $link
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
            [['idnoticia', 'titulo', 'imagen', 'fecha', 'link'], 'required'],
            [['idnoticia'], 'integer'],
            [['fecha'], 'safe'],
            [['titulo', 'imagen', 'link'], 'string', 'max' => 200]
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
            'link' => 'Link',
        ];
    }
}
