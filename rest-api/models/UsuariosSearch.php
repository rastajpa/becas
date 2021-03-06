<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form about `app\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idusuarios', 'usuario', 'permiso'], 'integer'],
            [['clave', 'email', 'fechaserver'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuarios::find();

        

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            //$query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idusuarios' => $this->idusuarios,
            'email' => $this->email,
            'permiso' => $this->permiso,
            'fechaserver' => $this->fechaserver,
        ]);

        $query->andFilterWhere(['=', 'clave', $this->clave])
            ->andFilterWhere(['=', 'usuario', $this->usuario]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
    
        if($this->usuario!=''&&$this->clave!=''){
        return $dataProvider;}
        else{return true;}
    }
}
