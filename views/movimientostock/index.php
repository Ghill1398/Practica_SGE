<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovimientostockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movimientostocks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimientostock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Movimientostock', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idMovimientoStock',
            'fk_idProducto',
            'fk_idStockOrigen',
            'fk_idStockDestino',
            'time',
            // 'fk_idUser',
            // 'cantidad',
            // 'observaciones',
            // 'cierre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
