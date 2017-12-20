<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Precioproductoorden */

$this->title = $model->idPrecioProductoOrden;
$this->params['breadcrumbs'][] = ['label' => 'Precioproductoordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="precioproductoorden-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idPrecioProductoOrden], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idPrecioProductoOrden], [
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
            'idPrecioProductoOrden',
            'fk_idProductoStock',
            'fk_idTipoCliente',
            'hora',
            'cantidad',
            'precioSF',
            'precioCF',
        ],
    ]) ?>

</div>
