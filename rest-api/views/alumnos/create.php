<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = 'Create Alumnos';
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
