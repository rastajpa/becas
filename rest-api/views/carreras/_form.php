<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carreras */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carreras-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idfacultad')->textInput() ?>

    <?= $form->field($model, 'carrera')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <?= $form->field($model, 'idnivelC')->textInput() ?>

    <?= $form->field($model, 'anio1')->textInput() ?>

    <?= $form->field($model, 'anio2')->textInput() ?>

    <?= $form->field($model, 'anio3')->textInput() ?>

    <?= $form->field($model, 'anio4')->textInput() ?>

    <?= $form->field($model, 'anio5')->textInput() ?>

    <?= $form->field($model, 'anio6')->textInput() ?>

    <?= $form->field($model, 'anio7')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
