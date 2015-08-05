<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DomicilioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="domicilio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddomicilio') ?>

    <?= $form->field($model, 'idalumno') ?>

    <?= $form->field($model, 'calle') ?>

    <?= $form->field($model, 'numcasa') ?>

    <?= $form->field($model, 'piso') ?>

    <?php // echo $form->field($model, 'dpto') ?>

    <?php // echo $form->field($model, 'barrio') ?>

    <?php // echo $form->field($model, 'idlocalidad') ?>

    <?php // echo $form->field($model, 'iddistancia') ?>

    <?php // echo $form->field($model, 'depto') ?>

    <?php // echo $form->field($model, 'codpost') ?>

    <?php // echo $form->field($model, 'codareaT') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'codareaC') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'convive') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
