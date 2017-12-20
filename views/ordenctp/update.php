<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenctp */

$this->title = 'Update Ordenctp: ' . $model->idOrdenCTP;
$this->params['breadcrumbs'][] = ['label' => 'Ordenctps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idOrdenCTP, 'url' => ['view', 'id' => $model->idOrdenCTP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordenctp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
