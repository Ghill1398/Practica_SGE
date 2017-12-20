<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrecioproductoordenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Precioproductoordens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="precioproductoorden-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Precioproductoorden', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPrecioProductoOrden',
            'fk_idProductoStock',
            'fk_idTipoCliente',
            'hora',
            'cantidad',
            // 'precioSF',
            // 'precioCF',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
