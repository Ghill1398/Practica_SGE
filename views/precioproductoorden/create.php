<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Precioproductoorden */

$this->title = 'Create Precioproductoorden';
$this->params['breadcrumbs'][] = ['label' => 'Precioproductoordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="precioproductoorden-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
