<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Secundarias */

$this->title = 'Update Secundarias: ' . ' ' . $model->idsec;
$this->params['breadcrumbs'][] = ['label' => 'Secundarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idsec, 'url' => ['view', 'id' => $model->idsec]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="secundarias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
