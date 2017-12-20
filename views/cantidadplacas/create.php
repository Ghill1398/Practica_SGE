<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cantidadplacas */

$this->title = 'Create Cantidadplacas';
$this->params['breadcrumbs'][] = ['label' => 'Cantidadplacas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cantidadplacas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
