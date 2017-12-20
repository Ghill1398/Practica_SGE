<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductostockSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productostock-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idProductoStock') ?>

    <?= $form->field($model, 'fk_idProducto') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'enable') ?>

    <?= $form->field($model, 'alertaCantidad') ?>

    <?php // echo $form->field($model, 'fk_idSucursal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
