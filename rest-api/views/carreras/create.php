<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Carreras */

$this->title = 'Create Carreras';
$this->params['breadcrumbs'][] = ['label' => 'Carreras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carreras-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
