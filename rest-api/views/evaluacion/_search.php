<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EvaluacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evaluacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idevaluacion') ?>

    <?= $form->field($model, 'dniE') ?>

    <?= $form->field($model, 'apellidoE') ?>

    <?= $form->field($model, 'nombreE') ?>

    <?= $form->field($model, 'montotalE') ?>

    <?php // echo $form->field($model, 'grufamE') ?>

    <?php // echo $form->field($model, 'idpropietarioE') ?>

    <?php // echo $form->field($model, 'idocupacionE') ?>

    <?php // echo $form->field($model, 'idinstruccionE') ?>

    <?php // echo $form->field($model, 'idsaludE') ?>

    <?php // echo $form->field($model, 'iddistanciaE') ?>

    <?php // echo $form->field($model, 'causa1') ?>

    <?php // echo $form->field($model, 'causa2') ?>

    <?php // echo $form->field($model, 'causa3') ?>

    <?php // echo $form->field($model, 'causa4') ?>

    <?php // echo $form->field($model, 'comentarioE') ?>

    <?php // echo $form->field($model, 'userE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
