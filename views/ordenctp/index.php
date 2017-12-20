<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdenctpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordenctps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenctp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ordenctp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idOrdenCTP',
            'fechaGenerada',
            'fechaCobro',
            'cfSF',
            'tipoPago',
            // 'fechaPlazo',
            // 'codigoServicio',
            // 'secuencia',
            // 'serie',
            // 'correlativo',
            // 'montoVenta',
            // 'montoDescuento',
            // 'estado',
            // 'autorizado',
            // 'observaciones',
            // 'observacionesCaja',
            // 'fk_idCliente',
            // 'fk_idMovimientoCaja',
            // 'fk_idSucursal',
            // 'fk_idUserD',
            // 'fk_idUserV',
            // 'fk_idUserD2',
            // 'responsable',
            // 'telefono',
            // 'observacionAdicional',
            // 'factura',
            // 'fk_idParent',
            // 'tipoOrden',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
