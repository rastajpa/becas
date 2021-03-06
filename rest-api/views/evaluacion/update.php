<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Evaluacion */

$this->title = 'Update Evaluacion: ' . ' ' . $model->idevaluacion;
$this->params['breadcrumbs'][] = ['label' => 'Evaluacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idevaluacion, 'url' => ['view', 'id' => $model->idevaluacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="evaluacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
