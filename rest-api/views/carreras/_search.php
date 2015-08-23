<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarrerasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carreras-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idfacultad') ?>

    <?= $form->field($model, 'idcarrera') ?>

    <?= $form->field($model, 'carrera') ?>

    <?= $form->field($model, 'plan') ?>

    <?= $form->field($model, 'duracion') ?>

    <?php // echo $form->field($model, 'idnivelC') ?>

    <?php // echo $form->field($model, 'anio1') ?>

    <?php // echo $form->field($model, 'anio2') ?>

    <?php // echo $form->field($model, 'anio3') ?>

    <?php // echo $form->field($model, 'anio4') ?>

    <?php // echo $form->field($model, 'anio5') ?>

    <?php // echo $form->field($model, 'anio6') ?>

    <?php // echo $form->field($model, 'anio7') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
