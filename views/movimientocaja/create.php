<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Movimientocaja */

$this->title = 'Create Movimientocaja';
$this->params['breadcrumbs'][] = ['label' => 'Movimientocajas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimientocaja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
