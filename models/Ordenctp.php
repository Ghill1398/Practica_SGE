<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordenctp".
 *
 * @property integer $idOrdenCTP
 * @property string $fechaGenerada
 * @property string $fechaCobro
 * @property integer $cfSF
 * @property integer $tipoPago
 * @property string $fechaPlazo
 * @property string $codigoServicio
 * @property integer $secuencia
 * @property integer $serie
 * @property integer $correlativo
 * @property double $montoVenta
 * @property double $montoDescuento
 * @property integer $estado
 * @property string $autorizado
 * @property string $observaciones
 * @property string $observacionesCaja
 * @property integer $fk_idCliente
 * @property integer $fk_idMovimientoCaja
 * @property integer $fk_idSucursal
 * @property integer $fk_idUserD
 * @property integer $fk_idUserV
 * @property integer $fk_idUserD2
 * @property string $responsable
 * @property string $telefono
 * @property string $observacionAdicional
 * @property string $factura
 * @property integer $fk_idParent
 * @property integer $tipoOrden
 *
 * @property Ordenctp $fkIdParent
 * @property Ordenctp[] $ordenctps
 * @property Cliente $fkIdCliente
 * @property Movimientocaja $fkIdMovimientoCaja
 * @property User $fkIdUserD
 * @property User $fkIdUserV
 * @property User $fkIdUserD2
 * @property Sucursal $fkIdSucursal
 * @property Ordendetalle[] $ordendetalles
 */
class Ordenctp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordenctp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechaGenerada', 'secuencia', 'serie', 'correlativo', 'estado', 'fk_idSucursal', 'responsable'], 'required'],
            [['fechaGenerada', 'fechaCobro', 'fechaPlazo'], 'safe'],
            [['cfSF', 'tipoPago', 'secuencia', 'serie', 'correlativo', 'estado', 'fk_idCliente', 'fk_idMovimientoCaja', 'fk_idSucursal', 'fk_idUserD', 'fk_idUserV', 'fk_idUserD2', 'fk_idParent', 'tipoOrden'], 'integer'],
            [['montoVenta', 'montoDescuento'], 'number'],
            [['codigoServicio', 'autorizado'], 'string', 'max' => 100],
            [['observaciones', 'observacionAdicional', 'factura'], 'string', 'max' => 200],
            [['observacionesCaja'], 'string', 'max' => 45],
            [['responsable'], 'string', 'max' => 50],
            [['telefono'], 'string', 'max' => 20],
            [['fk_idParent'], 'exist', 'skipOnError' => true, 'targetClass' => Ordenctp::className(), 'targetAttribute' => ['fk_idParent' => 'idOrdenCTP']],
            [['fk_idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['fk_idCliente' => 'idCliente']],
            [['fk_idMovimientoCaja'], 'exist', 'skipOnError' => true, 'targetClass' => Movimientocaja::className(), 'targetAttribute' => ['fk_idMovimientoCaja' => 'idMovimientoCaja']],
            [['fk_idUserD'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['fk_idUserD' => 'idUser']],
            [['fk_idUserV'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['fk_idUserV' => 'idUser']],
            [['fk_idUserD2'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['fk_idUserD2' => 'idUser']],
            [['fk_idSucursal'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursal::className(), 'targetAttribute' => ['fk_idSucursal' => 'idSucursal']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idOrdenCTP' => 'Id Orden Ctp',
            'fechaGenerada' => 'Fecha Generada',
            'fechaCobro' => 'Fecha Cobro',
            'cfSF' => 'Cf Sf',
            'tipoPago' => 'Tipo Pago',
            'fechaPlazo' => 'Fecha Plazo',
            'codigoServicio' => 'Codigo Servicio',
            'secuencia' => 'Secuencia',
            'serie' => 'Serie',
            'correlativo' => 'Correlativo',
            'montoVenta' => 'Monto Venta',
            'montoDescuento' => 'Monto Descuento',
            'estado' => 'Estado',
            'autorizado' => 'Autorizado',
            'observaciones' => 'Observaciones',
            'observacionesCaja' => 'Observaciones Caja',
            'fk_idCliente' => 'Fk Id Cliente',
            'fk_idMovimientoCaja' => 'Fk Id Movimiento Caja',
            'fk_idSucursal' => 'Fk Id Sucursal',
            'fk_idUserD' => 'Fk Id User D',
            'fk_idUserV' => 'Fk Id User V',
            'fk_idUserD2' => 'Fk Id User D2',
            'responsable' => 'Responsable',
            'telefono' => 'Telefono',
            'observacionAdicional' => 'Observacion Adicional',
            'factura' => 'Factura',
            'fk_idParent' => 'Fk Id Parent',
            'tipoOrden' => 'Tipo Orden',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdParent()
    {
        return $this->hasOne(Ordenctp::className(), ['idOrdenCTP' => 'fk_idParent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenctps()
    {
        return $this->hasMany(Ordenctp::className(), ['fk_idParent' => 'idOrdenCTP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdCliente()
    {
        return $this->hasOne(Cliente::className(), ['idCliente' => 'fk_idCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdMovimientoCaja()
    {
        return $this->hasOne(Movimientocaja::className(), ['idMovimientoCaja' => 'fk_idMovimientoCaja']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdUserD()
    {
        return $this->hasOne(User::className(), ['idUser' => 'fk_idUserD']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdUserV()
    {
        return $this->hasOne(User::className(), ['idUser' => 'fk_idUserV']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdUserD2()
    {
        return $this->hasOne(User::className(), ['idUser' => 'fk_idUserD2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdSucursal()
    {
        return $this->hasOne(Sucursal::className(), ['idSucursal' => 'fk_idSucursal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdendetalles()
    {
        return $this->hasMany(Ordendetalle::className(), ['fk_idOrden' => 'idOrdenCTP']);
    }
}
