<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Recibo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recibo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secuencia')->textInput() ?>

    <?= $form->field($model, 'fk_idSucursal')->textInput() ?>

    <?= $form->field($model, 'detalle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciNit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saldo')->textInput() ?>

    <?= $form->field($model, 'monto')->textInput() ?>

    <?= $form->field($model, 'acuenta')->textInput() ?>

    <?= $form->field($model, 'fechaRegistro')->textInput() ?>

    <?= $form->field($model, 'fk_idUser')->textInput() ?>

    <?= $form->field($model, 'codigoVenta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fk_idServicio')->textInput() ?>

    <?= $form->field($model, 'tipoRecibo')->textInput() ?>

    <?= $form->field($model, 'fk_idMovimientoCaja')->textInput() ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
