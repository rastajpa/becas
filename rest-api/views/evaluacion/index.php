<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EvaluacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Evaluacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Evaluacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idevaluacion',
            'dniE',
            'apellidoE',
            'nombreE',
            'montotalE',
            // 'grufamE',
            // 'idpropietarioE',
            // 'idocupacionE',
            // 'idinstruccionE',
            // 'idsaludE',
            // 'iddistanciaE',
            // 'causa1',
            // 'causa2',
            // 'causa3',
            // 'causa4',
            // 'comentarioE',
            // 'userE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
