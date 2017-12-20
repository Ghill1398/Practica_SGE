<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Precioproductoorden */

$this->title = 'Update Precioproductoorden: ' . $model->idPrecioProductoOrden;
$this->params['breadcrumbs'][] = ['label' => 'Precioproductoordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPrecioProductoOrden, 'url' => ['view', 'id' => $model->idPrecioProductoOrden]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="precioproductoorden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
