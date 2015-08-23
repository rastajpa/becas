<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Corte */

$this->title = 'Update Corte: ' . ' ' . $model->valorcorte;
$this->params['breadcrumbs'][] = ['label' => 'Cortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->valorcorte, 'url' => ['view', 'id' => $model->valorcorte]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="corte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
