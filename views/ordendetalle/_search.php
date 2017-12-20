<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrdendetalleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordendetalle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idOrdenDetalleServicio') ?>

    <?= $form->field($model, 'fk_idProductoStock') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'C') ?>

    <?= $form->field($model, 'M') ?>

    <?php // echo $form->field($model, 'Y') ?>

    <?php // echo $form->field($model, 'K') ?>

    <?php // echo $form->field($model, 'trabajo') ?>

    <?php // echo $form->field($model, 'pinza') ?>

    <?php // echo $form->field($model, 'resolucion') ?>

    <?php // echo $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'adicional') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'fk_idOrden') ?>

    <?php // echo $form->field($model, 'fk_idMovimientoStock') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
