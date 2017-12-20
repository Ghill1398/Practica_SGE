<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ordenctp */

$this->title = 'Create Ordenctp';
$this->params['breadcrumbs'][] = ['label' => 'Ordenctps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenctp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
