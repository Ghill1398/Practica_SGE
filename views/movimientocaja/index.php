<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovimientocajaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movimientocajas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimientocaja-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Movimientocaja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idMovimientoCaja',
            'fk_idCajaOrigen',
            'fk_idCajaDestino',
            'time',
            'fk_idUser',
            // 'monto',
            // 'tipoMovimiento',
            // 'observaciones',
            // 'fechaCierre',
            // 'saldoCierre',
            // 'correlativoCierre',
            // 'idParent',
            // 'nroDoc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
