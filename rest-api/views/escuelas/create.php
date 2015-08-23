<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Escuelas */

$this->title = 'Create Escuelas';
$this->params['breadcrumbs'][] = ['label' => 'Escuelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escuelas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
