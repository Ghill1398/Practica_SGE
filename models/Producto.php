<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property integer $idProducto
 * @property string $codigo
 * @property string $codigoPersonalizado
 * @property string $dimension
 * @property integer $toBuy
 * @property integer $toSell
 * @property string $importKey
 * @property integer $cantidadPaquete
 * @property string $material
 * @property string $formato
 *
 * @property Movimientostock[] $movimientostocks
 * @property Productostock[] $productostocks
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'cantidadPaquete', 'material', 'formato'], 'required'],
            [['toBuy', 'toSell', 'cantidadPaquete'], 'integer'],
            [['codigo', 'codigoPersonalizado', 'material', 'formato'], 'string', 'max' => 50],
            [['dimension'], 'string', 'max' => 200],
            [['importKey'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProducto' => 'Id Producto',
            'codigo' => 'Codigo',
            'codigoPersonalizado' => 'Codigo Personalizado',
            'dimension' => 'Dimension',
            'toBuy' => 'To Buy',
            'toSell' => 'To Sell',
            'importKey' => 'Import Key',
            'cantidadPaquete' => 'Cantidad Paquete',
            'material' => 'Material',
            'formato' => 'Formato',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimientostocks()
    {
        return $this->hasMany(Movimientostock::className(), ['fk_idProducto' => 'idProducto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductostocks()
    {
        return $this->hasMany(Productostock::className(), ['fk_idProducto' => 'idProducto']);
    }
}
