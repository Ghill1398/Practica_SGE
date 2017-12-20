<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipocliente */

$this->title = 'Update Tipocliente: ' . $model->idTipoCliente;
$this->params['breadcrumbs'][] = ['label' => 'Tipoclientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTipoCliente, 'url' => ['view', 'id' => $model->idTipoCliente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipocliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
