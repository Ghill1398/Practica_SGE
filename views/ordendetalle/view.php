<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ordendetalle */

$this->title = $model->idOrdenDetalleServicio;
$this->params['breadcrumbs'][] = ['label' => 'Ordendetalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordendetalle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idOrdenDetalleServicio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idOrdenDetalleServicio], [
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
            'idOrdenDetalleServicio',
            'fk_idProductoStock',
            'cantidad',
            'C',
            'M',
            'Y',
            'K',
            'trabajo',
            'pinza',
            'resolucion',
            'costo',
            'adicional',
            'total',
            'fk_idOrden',
            'fk_idMovimientoStock',
        ],
    ]) ?>

</div>
