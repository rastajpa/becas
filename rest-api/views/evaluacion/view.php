<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Evaluacion */

$this->title = $model->idevaluacion;
$this->params['breadcrumbs'][] = ['label' => 'Evaluacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idevaluacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idevaluacion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idevaluacion',
            'dniE',
            'apellidoE',
            'nombreE',
            'montotalE',
            'grufamE',
            'idpropietarioE',
            'idocupacionE',
            'idinstruccionE',
            'idsaludE',
            'iddistanciaE',
            'causa1',
            'causa2',
            'causa3',
            'causa4',
            'comentarioE',
            'userE',
        ],
    ]) ?>

</div>
