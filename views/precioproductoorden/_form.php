<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Precioproductoorden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="precioproductoorden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_idProductoStock')->textInput() ?>

    <?= $form->field($model, 'fk_idTipoCliente')->textInput() ?>

    <?= $form->field($model, 'hora')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'precioSF')->textInput() ?>

    <?= $form->field($model, 'precioCF')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
