<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SecundariasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Secundarias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="secundarias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Secundarias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idsec',
            'dni',
            'apellido',
            'nombre',
            'escuela',
            // 'resultado',
            // 'causa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
