<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Domicilio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="domicilio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idalumno')->textInput() ?>

    <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numcasa')->textInput() ?>

    <?= $form->field($model, 'piso')->textInput() ?>

    <?= $form->field($model, 'dpto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barrio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idlocalidad')->textInput() ?>

    <?= $form->field($model, 'iddistancia')->textInput() ?>

    <?= $form->field($model, 'depto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codpost')->textInput() ?>

    <?= $form->field($model, 'codareaT')->textInput() ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codareaC')->textInput() ?>

    <?= $form->field($model, 'celular')->textInput() ?>

    <?= $form->field($model, 'convive')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
