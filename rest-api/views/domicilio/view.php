<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Domicilio */

$this->title = $model->iddomicilio;
$this->params['breadcrumbs'][] = ['label' => 'Domicilios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="domicilio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->iddomicilio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->iddomicilio], [
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
            'iddomicilio',
            'idalumno',
            'calle',
            'numcasa',
            'piso',
            'dpto',
            'barrio',
            'idlocalidad',
            'iddistancia',
            'depto',
            'codpost',
            'codareaT',
            'telefono',
            'codareaC',
            'celular',
            'convive',
        ],
    ]) ?>

</div>
