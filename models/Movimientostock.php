<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimientostock".
 *
 * @property integer $idMovimientoStock
 * @property integer $fk_idProducto
 * @property integer $fk_idStockOrigen
 * @property integer $fk_idStockDestino
 * @property string $time
 * @property integer $fk_idUser
 * @property integer $cantidad
 * @property string $observaciones
 * @property integer $cierre
 *
 * @property Producto $fkIdProducto
 * @property Productostock $fkIdStockOrigen
 * @property Productostock $fkIdStockDestino
 * @property User $fkIdUser
 * @property Ordendetalle[] $ordendetalles
 */
class Movimientostock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'movimientostock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_idProducto', 'time', 'fk_idUser', 'cantidad'], 'required'],
            [['fk_idProducto', 'fk_idStockOrigen', 'fk_idStockDestino', 'fk_idUser', 'cantidad', 'cierre'], 'integer'],
            [['time'], 'safe'],
            [['observaciones'], 'string', 'max' => 100],
            [['fk_idProducto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['fk_idProducto' => 'idProducto']],
            [['fk_idStockOrigen'], 'exist', 'skipOnError' => true, 'targetClass' => Productostock::className(), 'targetAttribute' => ['fk_idStockOrigen' => 'idProductoStock']],
            [['fk_idStockDestino'], 'exist', 'skipOnError' => true, 'targetClass' => Productostock::className(), 'targetAttribute' => ['fk_idStockDestino' => 'idProductoStock']],
            [['fk_idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['fk_idUser' => 'idUser']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idMovimientoStock' => 'Id Movimiento Stock',
            'fk_idProducto' => 'Fk Id Producto',
            'fk_idStockOrigen' => 'Fk Id Stock Origen',
            'fk_idStockDestino' => 'Fk Id Stock Destino',
            'time' => 'Time',
            'fk_idUser' => 'Fk Id User',
            'cantidad' => 'Cantidad',
            'observaciones' => 'Observaciones',
            'cierre' => 'Cierre',
        ];
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
    public function getFkIdStockOrigen()
    {
        return $this->hasOne(Productostock::className(), ['idProductoStock' => 'fk_idStockOrigen']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdStockDestino()
    {
        return $this->hasOne(Productostock::className(), ['idProductoStock' => 'fk_idStockDestino']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdUser()
    {
        return $this->hasOne(User::className(), ['idUser' => 'fk_idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdendetalles()
    {
        return $this->hasMany(Ordendetalle::className(), ['fk_idMovimientoStock' => 'idMovimientoStock']);
    }
}
