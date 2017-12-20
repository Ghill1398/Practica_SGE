<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cantidadplacas */

$this->title = 'Update Cantidadplacas: ' . $model->idCantidadPlacas;
$this->params['breadcrumbs'][] = ['label' => 'Cantidadplacas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCantidadPlacas, 'url' => ['view', 'id' => $model->idCantidadPlacas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cantidadplacas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
