<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrdenctpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordenctp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idOrdenCTP') ?>

    <?= $form->field($model, 'fechaGenerada') ?>

    <?= $form->field($model, 'fechaCobro') ?>

    <?= $form->field($model, 'cfSF') ?>

    <?= $form->field($model, 'tipoPago') ?>

    <?php // echo $form->field($model, 'fechaPlazo') ?>

    <?php // echo $form->field($model, 'codigoServicio') ?>

    <?php // echo $form->field($model, 'secuencia') ?>

    <?php // echo $form->field($model, 'serie') ?>

    <?php // echo $form->field($model, 'correlativo') ?>

    <?php // echo $form->field($model, 'montoVenta') ?>

    <?php // echo $form->field($model, 'montoDescuento') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'autorizado') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'observacionesCaja') ?>

    <?php // echo $form->field($model, 'fk_idCliente') ?>

    <?php // echo $form->field($model, 'fk_idMovimientoCaja') ?>

    <?php // echo $form->field($model, 'fk_idSucursal') ?>

    <?php // echo $form->field($model, 'fk_idUserD') ?>

    <?php // echo $form->field($model, 'fk_idUserV') ?>

    <?php // echo $form->field($model, 'fk_idUserD2') ?>

    <?php // echo $form->field($model, 'responsable') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'observacionAdicional') ?>

    <?php // echo $form->field($model, 'factura') ?>

    <?php // echo $form->field($model, 'fk_idParent') ?>

    <?php // echo $form->field($model, 'tipoOrden') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
