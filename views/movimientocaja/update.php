<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Movimientocaja */

$this->title = 'Update Movimientocaja: ' . $model->idMovimientoCaja;
$this->params['breadcrumbs'][] = ['label' => 'Movimientocajas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idMovimientoCaja, 'url' => ['view', 'id' => $model->idMovimientoCaja]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movimientocaja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
