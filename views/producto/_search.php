<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idProducto') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'codigoPersonalizado') ?>

    <?= $form->field($model, 'dimension') ?>

    <?= $form->field($model, 'toBuy') ?>

    <?php // echo $form->field($model, 'toSell') ?>

    <?php // echo $form->field($model, 'importKey') ?>

    <?php // echo $form->field($model, 'cantidadPaquete') ?>

    <?php // echo $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'formato') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
