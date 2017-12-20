<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductostockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productostocks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productostock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productostock', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idProductoStock',
            'fk_idProducto',
            'cantidad',
            'enable',
            'alertaCantidad',
            // 'fk_idSucursal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
