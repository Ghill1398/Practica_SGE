<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movimientocaja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimientocaja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_idCajaOrigen')->textInput() ?>

    <?= $form->field($model, 'fk_idCajaDestino')->textInput() ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'fk_idUser')->textInput() ?>

    <?= $form->field($model, 'monto')->textInput() ?>

    <?= $form->field($model, 'tipoMovimiento')->textInput() ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaCierre')->textInput() ?>

    <?= $form->field($model, 'saldoCierre')->textInput() ?>

    <?= $form->field($model, 'correlativoCierre')->textInput() ?>

    <?= $form->field($model, 'idParent')->textInput() ?>

    <?= $form->field($model, 'nroDoc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
