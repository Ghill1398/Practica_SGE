<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrecioproductoordenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="precioproductoorden-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPrecioProductoOrden') ?>

    <?= $form->field($model, 'fk_idProductoStock') ?>

    <?= $form->field($model, 'fk_idTipoCliente') ?>

    <?= $form->field($model, 'hora') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?php // echo $form->field($model, 'precioSF') ?>

    <?php // echo $form->field($model, 'precioCF') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
