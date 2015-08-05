<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumnos;

/**
 * AlumnosSearch represents the model behind the search form about `app\models\Alumnos`.
 */
class AlumnosSearch extends Alumnos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idalumno', 'dni', 'cuil', 'idsexo', 'idsalud', 'discapacidad', 'originario', 'grufam', 'idpropietario', 'idinstruccion', 'idocupacion', 'becario', 'idcarrera', 'anioingreso', 'anioingresou', 'asistencia', 'idconvocatoria'], 'integer'],
            [['apellido', 'nombre', 'fechanac', 'nacion', 'observaciones'], 'safe'],
            [['montotal', 'promedio'], 'number'],
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
        $query = Alumnos::find();

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
            'idalumno' => $this->idalumno,
            'dni' => $this->dni,
            'cuil' => $this->cuil,
            'fechanac' => $this->fechanac,
            'idsexo' => $this->idsexo,
            'idsalud' => $this->idsalud,
            'discapacidad' => $this->discapacidad,
            'originario' => $this->originario,
            'grufam' => $this->grufam,
            'idpropietario' => $this->idpropietario,
            'idinstruccion' => $this->idinstruccion,
            'idocupacion' => $this->idocupacion,
            'montotal' => $this->montotal,
            'becario' => $this->becario,
            'idcarrera' => $this->idcarrera,
            'anioingreso' => $this->anioingreso,
            'anioingresou' => $this->anioingresou,
            'asistencia' => $this->asistencia,
            'promedio' => $this->promedio,
            'idconvocatoria' => $this->idconvocatoria,
        ]);

        $query->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'nacion', $this->nacion])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
