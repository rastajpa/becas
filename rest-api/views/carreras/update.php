<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carreras */

$this->title = 'Update Carreras: ' . ' ' . $model->idcarrera;
$this->params['breadcrumbs'][] = ['label' => 'Carreras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarrera, 'url' => ['view', 'id' => $model->idcarrera]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carreras-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
