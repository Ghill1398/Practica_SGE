<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdendetalleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordendetalles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordendetalle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ordendetalle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idOrdenDetalleServicio',
            'fk_idProductoStock',
            'cantidad',
            'C',
            'M',
            // 'Y',
            // 'K',
            // 'trabajo',
            // 'pinza',
            // 'resolucion',
            // 'costo',
            // 'adicional',
            // 'total',
            // 'fk_idOrden',
            // 'fk_idMovimientoStock',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
