<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Movimientostock */

$this->title = 'Update Movimientostock: ' . $model->idMovimientoStock;
$this->params['breadcrumbs'][] = ['label' => 'Movimientostocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idMovimientoStock, 'url' => ['view', 'id' => $model->idMovimientoStock]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movimientostock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
