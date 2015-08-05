<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Evaluacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evaluacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dniE')->textInput() ?>

    <?= $form->field($model, 'apellidoE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombreE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'montotalE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grufamE')->textInput() ?>

    <?= $form->field($model, 'idpropietarioE')->textInput() ?>

    <?= $form->field($model, 'idocupacionE')->textInput() ?>

    <?= $form->field($model, 'idinstruccionE')->textInput() ?>

    <?= $form->field($model, 'idsaludE')->textInput() ?>

    <?= $form->field($model, 'iddistanciaE')->textInput() ?>

    <?= $form->field($model, 'causa1')->textInput() ?>

    <?= $form->field($model, 'causa2')->textInput() ?>

    <?= $form->field($model, 'causa3')->textInput() ?>

    <?= $form->field($model, 'causa4')->textInput() ?>

    <?= $form->field($model, 'comentarioE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
