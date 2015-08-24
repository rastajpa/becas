<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Domicilio;

/**
 * DomicilioSearch represents the model behind the search form about `app\models\Domicilio`.
 */
class DomicilioSearch extends Domicilio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iddomicilio', 'idalumno', 'numcasa', 'piso', 'idlocalidad', 'iddistancia', 'codpost', 'codareaT', 'codareaC', 'celular', 'convive'], 'integer'],
            [['calle', 'dpto', 'barrio', 'depto', 'telefono'], 'safe'],
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
        $query = Domicilio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'iddomicilio' => $this->iddomicilio,
            'numcasa' => $this->numcasa,
            'calle', $this->calle,
            'piso' => $this->piso,
            'dpto', $this->dpto,
            'barrio', $this->barrio,
            'depto', $this->depto,
            'telefono', $this->telefono,
            'idlocalidad' => $this->idlocalidad,
            'iddistancia' => $this->iddistancia,
            'codpost' => $this->codpost,
            'codareaT' => $this->codareaT,
            'codareaC' => $this->codareaC,
            'celular' => $this->celular,
            'convive' => $this->convive,
        ]);

        $query->andFilterWhere(['=', 'idalumno', $this->idalumno]);
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
         
        if($this->idalumno!=''){
        return $dataProvider;}
        else{return true;}
    }
}
