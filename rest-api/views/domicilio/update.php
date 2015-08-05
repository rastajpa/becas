<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Domicilio */

$this->title = 'Update Domicilio: ' . ' ' . $model->iddomicilio;
$this->params['breadcrumbs'][] = ['label' => 'Domicilios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddomicilio, 'url' => ['view', 'id' => $model->iddomicilio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="domicilio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
