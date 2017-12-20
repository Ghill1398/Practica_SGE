<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovimientostockSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimientostock-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMovimientoStock') ?>

    <?= $form->field($model, 'fk_idProducto') ?>

    <?= $form->field($model, 'fk_idStockOrigen') ?>

    <?= $form->field($model, 'fk_idStockDestino') ?>

    <?= $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'fk_idUser') ?>

    <?php // echo $form->field($model, 'cantidad') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'cierre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
