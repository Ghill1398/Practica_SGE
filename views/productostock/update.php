<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Productostock */

$this->title = 'Update Productostock: ' . $model->idProductoStock;
$this->params['breadcrumbs'][] = ['label' => 'Productostocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idProductoStock, 'url' => ['view', 'id' => $model->idProductoStock]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productostock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
