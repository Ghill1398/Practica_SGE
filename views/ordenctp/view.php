<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenctp */

$this->title = $model->idOrdenCTP;
$this->params['breadcrumbs'][] = ['label' => 'Ordenctps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenctp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idOrdenCTP], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idOrdenCTP], [
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
            'idOrdenCTP',
            'fechaGenerada',
            'fechaCobro',
            'cfSF',
            'tipoPago',
            'fechaPlazo',
            'codigoServicio',
            'secuencia',
            'serie',
            'correlativo',
            'montoVenta',
            'montoDescuento',
            'estado',
            'autorizado',
            'observaciones',
            'observacionesCaja',
            'fk_idCliente',
            'fk_idMovimientoCaja',
            'fk_idSucursal',
            'fk_idUserD',
            'fk_idUserV',
            'fk_idUserD2',
            'responsable',
            'telefono',
            'observacionAdicional',
            'factura',
            'fk_idParent',
            'tipoOrden',
        ],
    ]) ?>

</div>
