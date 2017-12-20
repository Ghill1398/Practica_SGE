<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Movimientocaja */

$this->title = $model->idMovimientoCaja;
$this->params['breadcrumbs'][] = ['label' => 'Movimientocajas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimientocaja-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idMovimientoCaja], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idMovimientoCaja], [
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
            'idMovimientoCaja',
            'fk_idCajaOrigen',
            'fk_idCajaDestino',
            'time',
            'fk_idUser',
            'monto',
            'tipoMovimiento',
            'observaciones',
            'fechaCierre',
            'saldoCierre',
            'correlativoCierre',
            'idParent',
            'nroDoc',
        ],
    ]) ?>

</div>
