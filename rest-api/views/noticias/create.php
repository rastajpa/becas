<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Noticias */

$this->title = 'Create Noticias';
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
