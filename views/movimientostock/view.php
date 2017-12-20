<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Movimientostock */

$this->title = $model->idMovimientoStock;
$this->params['breadcrumbs'][] = ['label' => 'Movimientostocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimientostock-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idMovimientoStock], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idMovimientoStock], [
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
            'idMovimientoStock',
            'fk_idProducto',
            'fk_idStockOrigen',
            'fk_idStockDestino',
            'time',
            'fk_idUser',
            'cantidad',
            'observaciones',
            'cierre',
        ],
    ]) ?>

</div>
