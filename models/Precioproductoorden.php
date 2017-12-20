<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "precioproductoorden".
 *
 * @property integer $idPrecioProductoOrden
 * @property integer $fk_idProductoStock
 * @property integer $fk_idTipoCliente
 * @property integer $hora
 * @property integer $cantidad
 * @property double $precioSF
 * @property double $precioCF
 *
 * @property Cantidadplacas $cantidad0
 * @property Horaplacas $hora0
 * @property Productostock $fkIdProductoStock
 * @property Tipocliente $fkIdTipoCliente
 */
class Precioproductoorden extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'precioproductoorden';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_idProductoStock', 'fk_idTipoCliente', 'hora', 'cantidad', 'precioSF', 'precioCF'], 'required'],
            [['fk_idProductoStock', 'fk_idTipoCliente', 'hora', 'cantidad'], 'integer'],
            [['precioSF', 'precioCF'], 'number'],
            [['cantidad'], 'exist', 'skipOnError' => true, 'targetClass' => Cantidadplacas::className(), 'targetAttribute' => ['cantidad' => 'idCantidadPlacas']],
            [['hora'], 'exist', 'skipOnError' => true, 'targetClass' => Horaplacas::className(), 'targetAttribute' => ['hora' => 'idHoraPlacas']],
            [['fk_idProductoStock'], 'exist', 'skipOnError' => true, 'targetClass' => Productostock::className(), 'targetAttribute' => ['fk_idProductoStock' => 'idProductoStock']],
            [['fk_idTipoCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Tipocliente::className(), 'targetAttribute' => ['fk_idTipoCliente' => 'idTipoCliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPrecioProductoOrden' => 'Id Precio Producto Orden',
            'fk_idProductoStock' => 'Fk Id Producto Stock',
            'fk_idTipoCliente' => 'Fk Id Tipo Cliente',
            'hora' => 'Hora',
            'cantidad' => 'Cantidad',
            'precioSF' => 'Precio Sf',
            'precioCF' => 'Precio Cf',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCantidad0()
    {
        return $this->hasOne(Cantidadplacas::className(), ['idCantidadPlacas' => 'cantidad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHora0()
    {
        return $this->hasOne(Horaplacas::className(), ['idHoraPlacas' => 'hora']);
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
    public function getFkIdTipoCliente()
    {
        return $this->hasOne(Tipocliente::className(), ['idTipoCliente' => 'fk_idTipoCliente']);
    }
}
