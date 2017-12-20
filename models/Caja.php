<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caja".
 *
 * @property integer $idCaja
 * @property string $nombre
 * @property string $descripcion
 * @property double $monto
 * @property string $fechaCreacion
 * @property string $fechaUltimoMovimiento
 * @property integer $enable
 * @property integer $fk_idServicio
 * @property integer $fk_idSucursal
 * @property integer $fk_idCaja
 *
 * @property Caja $fkIdCaja
 * @property Caja[] $cajas
 * @property Servicio $fkIdServicio
 * @property Sucursal $fkIdSucursal
 * @property Movimientocaja[] $movimientocajas
 * @property Movimientocaja[] $movimientocajas0
 */
class Caja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'caja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'monto', 'fechaCreacion', 'fk_idSucursal'], 'required'],
            [['monto'], 'number'],
            [['fechaCreacion', 'fechaUltimoMovimiento'], 'safe'],
            [['enable', 'fk_idServicio', 'fk_idSucursal', 'fk_idCaja'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['descripcion'], 'string', 'max' => 100],
            [['fk_idCaja'], 'exist', 'skipOnError' => true, 'targetClass' => Caja::className(), 'targetAttribute' => ['fk_idCaja' => 'idCaja']],
            [['fk_idServicio'], 'exist', 'skipOnError' => true, 'targetClass' => Servicio::className(), 'targetAttribute' => ['fk_idServicio' => 'idServicio']],
            [['fk_idSucursal'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursal::className(), 'targetAttribute' => ['fk_idSucursal' => 'idSucursal']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCaja' => 'Id Caja',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'monto' => 'Monto',
            'fechaCreacion' => 'Fecha Creacion',
            'fechaUltimoMovimiento' => 'Fecha Ultimo Movimiento',
            'enable' => 'Enable',
            'fk_idServicio' => 'Fk Id Servicio',
            'fk_idSucursal' => 'Fk Id Sucursal',
            'fk_idCaja' => 'Fk Id Caja',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdCaja()
    {
        return $this->hasOne(Caja::className(), ['idCaja' => 'fk_idCaja']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCajas()
    {
        return $this->hasMany(Caja::className(), ['fk_idCaja' => 'idCaja']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdServicio()
    {
        return $this->hasOne(Servicio::className(), ['idServicio' => 'fk_idServicio']);
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
    public function getMovimientocajas()
    {
        return $this->hasMany(Movimientocaja::className(), ['fk_idCajaDestino' => 'idCaja']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimientocajas0()
    {
        return $this->hasMany(Movimientocaja::className(), ['fk_idCajaOrigen' => 'idCaja']);
    }
}
