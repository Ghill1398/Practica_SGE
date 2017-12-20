<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Recibo */

$this->title = $model->idRecibo;
$this->params['breadcrumbs'][] = ['label' => 'Recibos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recibo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idRecibo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idRecibo], [
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
            'idRecibo',
            'codigo',
            'secuencia',
            'fk_idSucursal',
            'detalle',
            'nombre',
            'ciNit',
            'saldo',
            'monto',
            'acuenta',
            'fechaRegistro',
            'fk_idUser',
            'codigoVenta',
            'fk_idServicio',
            'tipoRecibo',
            'fk_idMovimientoCaja',
            'observaciones',
        ],
    ]) ?>

</div>
