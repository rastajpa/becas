<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Corte */

$this->title = 'Create Corte';
$this->params['breadcrumbs'][] = ['label' => 'Cortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
