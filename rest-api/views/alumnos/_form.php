<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dni')->textInput() ?>

    <?= $form->field($model, 'cuil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechanac')->textInput() ?>

    <?= $form->field($model, 'nacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idsexo')->textInput() ?>

    <?= $form->field($model, 'idsalud')->textInput() ?>

    <?= $form->field($model, 'discapacidad')->textInput() ?>

    <?= $form->field($model, 'originario')->textInput() ?>

    <?= $form->field($model, 'grufam')->textInput() ?>

    <?= $form->field($model, 'idpropietario')->textInput() ?>

    <?= $form->field($model, 'idinstruccion')->textInput() ?>

    <?= $form->field($model, 'idocupacion')->textInput() ?>

    <?= $form->field($model, 'montotal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'becario')->textInput() ?>

    <?= $form->field($model, 'idcarrera')->textInput() ?>

    <?= $form->field($model, 'anioingreso')->textInput() ?>

    <?= $form->field($model, 'anioingresou')->textInput() ?>

    <?= $form->field($model, 'asistencia')->textInput() ?>

    <?= $form->field($model, 'promedio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idconvocatoria')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
