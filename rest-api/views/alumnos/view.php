<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = $model->idalumno;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idalumno], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idalumno], [
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
            'idalumno',
            'dni',
            'cuil',
            'apellido',
            'nombre',
            'fechanac',
            'nacion',
            'idsexo',
            'idsalud',
            'discapacidad',
            'originario',
            'grufam',
            'idpropietario',
            'idinstruccion',
            'idocupacion',
            'montotal',
            'becario',
            'idcarrera',
            'anioingreso',
            'anioingresou',
            'asistencia',
            'promedio',
            'observaciones:ntext',
            'idconvocatoria',
        ],
    ]) ?>

</div>
