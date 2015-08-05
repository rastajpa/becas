<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Evaluacion;

/**
 * EvaluacionSearch represents the model behind the search form about `app\models\Evaluacion`.
 */
class EvaluacionSearch extends Evaluacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idevaluacion', 'dniE', 'grufamE', 'idpropietarioE', 'idocupacionE', 'idinstruccionE', 'idsaludE', 'iddistanciaE', 'causa1', 'causa2', 'causa3', 'causa4', 'userE'], 'integer'],
            [['apellidoE', 'nombreE', 'comentarioE'], 'safe'],
            [['montotalE'], 'number'],
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
        $query = Evaluacion::find();

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
            'idevaluacion' => $this->idevaluacion,
            'dniE' => $this->dniE,
            'montotalE' => $this->montotalE,
            'grufamE' => $this->grufamE,
            'idpropietarioE' => $this->idpropietarioE,
            'idocupacionE' => $this->idocupacionE,
            'idinstruccionE' => $this->idinstruccionE,
            'idsaludE' => $this->idsaludE,
            'iddistanciaE' => $this->iddistanciaE,
            'causa1' => $this->causa1,
            'causa2' => $this->causa2,
            'causa3' => $this->causa3,
            'causa4' => $this->causa4,
            'userE' => $this->userE,
        ]);

        $query->andFilterWhere(['like', 'apellidoE', $this->apellidoE])
            ->andFilterWhere(['like', 'nombreE', $this->nombreE])
            ->andFilterWhere(['like', 'comentarioE', $this->comentarioE]);

        return $dataProvider;
    }
}
