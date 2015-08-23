<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CorteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cortes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corte-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Corte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'valorcorte',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
