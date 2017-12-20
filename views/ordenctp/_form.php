<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenctp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordenctp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fechaGenerada')->textInput() ?>

    <?= $form->field($model, 'fechaCobro')->textInput() ?>

    <?= $form->field($model, 'cfSF')->textInput() ?>

    <?= $form->field($model, 'tipoPago')->textInput() ?>

    <?= $form->field($model, 'fechaPlazo')->textInput() ?>

    <?= $form->field($model, 'codigoServicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secuencia')->textInput() ?>

    <?= $form->field($model, 'serie')->textInput() ?>

    <?= $form->field($model, 'correlativo')->textInput() ?>

    <?= $form->field($model, 'montoVenta')->textInput() ?>

    <?= $form->field($model, 'montoDescuento')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'autorizado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacionesCaja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fk_idCliente')->textInput() ?>

    <?= $form->field($model, 'fk_idMovimientoCaja')->textInput() ?>

    <?= $form->field($model, 'fk_idSucursal')->textInput() ?>

    <?= $form->field($model, 'fk_idUserD')->textInput() ?>

    <?= $form->field($model, 'fk_idUserV')->textInput() ?>

    <?= $form->field($model, 'fk_idUserD2')->textInput() ?>

    <?= $form->field($model, 'responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacionAdicional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fk_idParent')->textInput() ?>

    <?= $form->field($model, 'tipoOrden')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
