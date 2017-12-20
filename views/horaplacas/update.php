<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Horaplacas */

$this->title = 'Update Horaplacas: ' . $model->idHoraPlacas;
$this->params['breadcrumbs'][] = ['label' => 'Horaplacas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idHoraPlacas, 'url' => ['view', 'id' => $model->idHoraPlacas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="horaplacas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
