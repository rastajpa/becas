<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Corte */

$this->title = $model->valorcorte;
$this->params['breadcrumbs'][] = ['label' => 'Cortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->valorcorte], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->valorcorte], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'valorcorte',
        ],
    ]) ?>

</div>
