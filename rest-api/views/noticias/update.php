<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Noticias */

$this->title = 'Update Noticias: ' . ' ' . $model->idnoticia;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idnoticia, 'url' => ['view', 'id' => $model->idnoticia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="noticias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
