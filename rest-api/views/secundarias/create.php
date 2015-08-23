<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Secundarias */

$this->title = 'Create Secundarias';
$this->params['breadcrumbs'][] = ['label' => 'Secundarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="secundarias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
