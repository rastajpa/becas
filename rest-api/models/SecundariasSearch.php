<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Secundarias;

/**
 * SecundariasSearch represents the model behind the search form about `app\models\Secundarias`.
 */
class SecundariasSearch extends Secundarias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idsec', 'dni', 'escuela', 'resultado'], 'integer'],
            [['apellido', 'nombre', 'causa'], 'safe'],
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
        $query = Secundarias::find();

        

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idsec' => $this->idsec,
            'dni' => $this->dni,
            'escuela' => $this->escuela,
            'resultado' => $this->resultado,
        ]);

        $query->andFilterWhere(['=', 'dni' , $this->dni]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
         if($this->dni!=''){
        return $dataProvider;}
        else{return true;}
    }
}
