<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlumnosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Alumnos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idalumno',
            'dni',
            'cuil',
            'apellido',
            'nombre',
            // 'fechanac',
            // 'nacion',
            // 'idsexo',
            // 'idsalud',
            // 'discapacidad',
            // 'originario',
            // 'grufam',
            // 'idpropietario',
            // 'idinstruccion',
            // 'idocupacion',
            // 'montotal',
            // 'becario',
            // 'idcarrera',
            // 'anioingreso',
            // 'anioingresou',
            // 'asistencia',
            // 'promedio',
            // 'observaciones:ntext',
            // 'idconvocatoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
