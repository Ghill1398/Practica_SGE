<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recibo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idRecibo') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'secuencia') ?>

    <?= $form->field($model, 'fk_idSucursal') ?>

    <?= $form->field($model, 'detalle') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'ciNit') ?>

    <?php // echo $form->field($model, 'saldo') ?>

    <?php // echo $form->field($model, 'monto') ?>

    <?php // echo $form->field($model, 'acuenta') ?>

    <?php // echo $form->field($model, 'fechaRegistro') ?>

    <?php // echo $form->field($model, 'fk_idUser') ?>

    <?php // echo $form->field($model, 'codigoVenta') ?>

    <?php // echo $form->field($model, 'fk_idServicio') ?>

    <?php // echo $form->field($model, 'tipoRecibo') ?>

    <?php // echo $form->field($model, 'fk_idMovimientoCaja') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
