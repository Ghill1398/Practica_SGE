<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cantidadplacas */

$this->title = $model->idCantidadPlacas;
$this->params['breadcrumbs'][] = ['label' => 'Cantidadplacas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cantidadplacas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idCantidadPlacas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idCantidadPlacas], [
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
            'idCantidadPlacas',
            'valor',
            'enable',
        ],
    ]) ?>

</div>
