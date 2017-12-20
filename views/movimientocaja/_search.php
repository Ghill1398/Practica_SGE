<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovimientocajaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimientocaja-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMovimientoCaja') ?>

    <?= $form->field($model, 'fk_idCajaOrigen') ?>

    <?= $form->field($model, 'fk_idCajaDestino') ?>

    <?= $form->field($model, 'time') ?>

    <?= $form->field($model, 'fk_idUser') ?>

    <?php // echo $form->field($model, 'monto') ?>

    <?php // echo $form->field($model, 'tipoMovimiento') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'fechaCierre') ?>

    <?php // echo $form->field($model, 'saldoCierre') ?>

    <?php // echo $form->field($model, 'correlativoCierre') ?>

    <?php // echo $form->field($model, 'idParent') ?>

    <?php // echo $form->field($model, 'nroDoc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
