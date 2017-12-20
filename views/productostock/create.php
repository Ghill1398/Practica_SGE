<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Productostock */

$this->title = 'Create Productostock';
$this->params['breadcrumbs'][] = ['label' => 'Productostocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productostock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
