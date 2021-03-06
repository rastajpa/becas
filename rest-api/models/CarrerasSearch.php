<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carreras;

/**
 * CarrerasSearch represents the model behind the search form about `app\models\Carreras`.
 */
class CarrerasSearch extends Carreras
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idfacultad', 'idcarrera', 'duracion', 'idnivelC', 'anio1', 'anio2', 'anio3', 'anio4', 'anio5', 'anio6', 'anio7'], 'integer'],
            [['carrera', 'plan'], 'safe'],
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
        $query = Carreras::find();

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idfacultad' => $this->idfacultad,
            'idcarrera' => $this->idcarrera,
            'duracion' => $this->duracion,
            'idnivelC' => $this->idnivelC,
            'anio1' => $this->anio1,
            'anio2' => $this->anio2,
            'anio3' => $this->anio3,
            'anio4' => $this->anio4,
            'anio5' => $this->anio5,
            'anio6' => $this->anio6,
            'anio7' => $this->anio7,
        ]);

        $query->andFilterWhere(['=', 'idcarrera', $this->idcarrera]);
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
         if($this->idcarrera!=''){
        return $dataProvider;}
        else{return true;}
     
    }
}
