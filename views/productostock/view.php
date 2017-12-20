<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Productostock */

$this->title = $model->idProductoStock;
$this->params['breadcrumbs'][] = ['label' => 'Productostocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productostock-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idProductoStock], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idProductoStock], [
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
            'idProductoStock',
            'fk_idProducto',
            'cantidad',
            'enable',
            'alertaCantidad',
            'fk_idSucursal',
        ],
    ]) ?>

</div>
