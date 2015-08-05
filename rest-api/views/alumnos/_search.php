<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idalumno') ?>

    <?= $form->field($model, 'dni') ?>

    <?= $form->field($model, 'cuil') ?>

    <?= $form->field($model, 'apellido') ?>

    <?= $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'fechanac') ?>

    <?php // echo $form->field($model, 'nacion') ?>

    <?php // echo $form->field($model, 'idsexo') ?>

    <?php // echo $form->field($model, 'idsalud') ?>

    <?php // echo $form->field($model, 'discapacidad') ?>

    <?php // echo $form->field($model, 'originario') ?>

    <?php // echo $form->field($model, 'grufam') ?>

    <?php // echo $form->field($model, 'idpropietario') ?>

    <?php // echo $form->field($model, 'idinstruccion') ?>

    <?php // echo $form->field($model, 'idocupacion') ?>

    <?php // echo $form->field($model, 'montotal') ?>

    <?php // echo $form->field($model, 'becario') ?>

    <?php // echo $form->field($model, 'idcarrera') ?>

    <?php // echo $form->field($model, 'anioingreso') ?>

    <?php // echo $form->field($model, 'anioingresou') ?>

    <?php // echo $form->field($model, 'asistencia') ?>

    <?php // echo $form->field($model, 'promedio') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'idconvocatoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
