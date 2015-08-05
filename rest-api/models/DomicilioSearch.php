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
            'idalumno' => $this->idalumno,
            'numcasa' => $this->numcasa,
            'piso' => $this->piso,
            'idlocalidad' => $this->idlocalidad,
            'iddistancia' => $this->iddistancia,
            'codpost' => $this->codpost,
            'codareaT' => $this->codareaT,
            'codareaC' => $this->codareaC,
            'celular' => $this->celular,
            'convive' => $this->convive,
        ]);

        $query->andFilterWhere(['like', 'calle', $this->calle])
            ->andFilterWhere(['like', 'dpto', $this->dpto])
            ->andFilterWhere(['like', 'barrio', $this->barrio])
            ->andFilterWhere(['like', 'depto', $this->depto])
            ->andFilterWhere(['like', 'telefono', $this->telefono]);

        return $dataProvider;
    }
}
