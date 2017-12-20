<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ordendetalle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordendetalle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_idProductoStock')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'C')->textInput() ?>

    <?= $form->field($model, 'M')->textInput() ?>

    <?= $form->field($model, 'Y')->textInput() ?>

    <?= $form->field($model, 'K')->textInput() ?>

    <?= $form->field($model, 'trabajo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pinza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resolucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo')->textInput() ?>

    <?= $form->field($model, 'adicional')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'fk_idOrden')->textInput() ?>

    <?= $form->field($model, 'fk_idMovimientoStock')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
