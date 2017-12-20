<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordendetalle".
 *
 * @property integer $idOrdenDetalleServicio
 * @property integer $fk_idProductoStock
 * @property integer $cantidad
 * @property integer $C
 * @property integer $M
 * @property integer $Y
 * @property integer $K
 * @property string $trabajo
 * @property string $pinza
 * @property string $resolucion
 * @property double $costo
 * @property double $adicional
 * @property double $total
 * @property integer $fk_idOrden
 * @property integer $fk_idMovimientoStock
 *
 * @property Movimientostock $fkIdMovimientoStock
 * @property Productostock $fkIdProductoStock
 * @property Ordenctp $fkIdOrden
 */
class Ordendetalle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordendetalle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_idProductoStock', 'cantidad', 'trabajo', 'pinza', 'resolucion', 'fk_idOrden'], 'required'],
            [['fk_idProductoStock', 'cantidad', 'C', 'M', 'Y', 'K', 'fk_idOrden', 'fk_idMovimientoStock'], 'integer'],
            [['pinza', 'resolucion', 'costo', 'adicional', 'total'], 'number'],
            [['trabajo'], 'string', 'max' => 30],
            [['fk_idMovimientoStock'], 'exist', 'skipOnError' => true, 'targetClass' => Movimientostock::className(), 'targetAttribute' => ['fk_idMovimientoStock' => 'idMovimientoStock']],
            [['fk_idProductoStock'], 'exist', 'skipOnError' => true, 'targetClass' => Productostock::className(), 'targetAttribute' => ['fk_idProductoStock' => 'idProductoStock']],
            [['fk_idOrden'], 'exist', 'skipOnError' => true, 'targetClass' => Ordenctp::className(), 'targetAttribute' => ['fk_idOrden' => 'idOrdenCTP']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idOrdenDetalleServicio' => 'Id Orden Detalle Servicio',
            'fk_idProductoStock' => 'Fk Id Producto Stock',
            'cantidad' => 'Cantidad',
            'C' => 'C',
            'M' => 'M',
            'Y' => 'Y',
            'K' => 'K',
            'trabajo' => 'Trabajo',
            'pinza' => 'Pinza',
            'resolucion' => 'Resolucion',
            'costo' => 'Costo',
            'adicional' => 'Adicional',
            'total' => 'Total',
            'fk_idOrden' => 'Fk Id Orden',
            'fk_idMovimientoStock' => 'Fk Id Movimiento Stock',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdMovimientoStock()
    {
        return $this->hasOne(Movimientostock::className(), ['idMovimientoStock' => 'fk_idMovimientoStock']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdProductoStock()
    {
        return $this->hasOne(Productostock::className(), ['idProductoStock' => 'fk_idProductoStock']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdOrden()
    {
        return $this->hasOne(Ordenctp::className(), ['idOrdenCTP' => 'fk_idOrden']);
    }
}
