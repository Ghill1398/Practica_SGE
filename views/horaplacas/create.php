<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Horaplacas */

$this->title = 'Create Horaplacas';
$this->params['breadcrumbs'][] = ['label' => 'Horaplacas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horaplacas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
