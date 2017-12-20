<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productostock".
 *
 * @property integer $idProductoStock
 * @property integer $fk_idProducto
 * @property integer $cantidad
 * @property integer $enable
 * @property integer $alertaCantidad
 * @property integer $fk_idSucursal
 *
 * @property Movimientostock[] $movimientostocks
 * @property Movimientostock[] $movimientostocks0
 * @property Ordendetalle[] $ordendetalles
 * @property Precioproductoorden[] $precioproductoordens
 * @property Producto $fkIdProducto
 * @property Sucursal $fkIdSucursal
 */
class Productostock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productostock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_idProducto', 'cantidad', 'enable', 'alertaCantidad'], 'required'],
            [['fk_idProducto', 'cantidad', 'enable', 'alertaCantidad', 'fk_idSucursal'], 'integer'],
            [['fk_idProducto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['fk_idProducto' => 'idProducto']],
            [['fk_idSucursal'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursal::className(), 'targetAttribute' => ['fk_idSucursal' => 'idSucursal']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProductoStock' => 'Id Producto Stock',
            'fk_idProducto' => 'Fk Id Producto',
            'cantidad' => 'Cantidad',
            'enable' => 'Enable',
            'alertaCantidad' => 'Alerta Cantidad',
            'fk_idSucursal' => 'Fk Id Sucursal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimientostocks()
    {
        return $this->hasMany(Movimientostock::className(), ['fk_idStockOrigen' => 'idProductoStock']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimientostocks0()
    {
        return $this->hasMany(Movimientostock::className(), ['fk_idStockDestino' => 'idProductoStock']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdendetalles()
    {
        return $this->hasMany(Ordendetalle::className(), ['fk_idProductoStock' => 'idProductoStock']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrecioproductoordens()
    {
        return $this->hasMany(Precioproductoorden::className(), ['fk_idProductoStock' => 'idProductoStock']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdProducto()
    {
        return $this->hasOne(Producto::className(), ['idProducto' => 'fk_idProducto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdSucursal()
    {
        return $this->hasOne(Sucursal::className(), ['idSucursal' => 'fk_idSucursal']);
    }
}
