<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cantidadplacas".
 *
 * @property integer $idCantidadPlacas
 * @property double $valor
 * @property integer $enable
 *
 * @property Precioproductoorden[] $precioproductoordens
 */
class Cantidadplacas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cantidadplacas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor', 'enable'], 'required'],
            [['valor'], 'number'],
            [['enable'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCantidadPlacas' => 'Id Cantidad Placas',
            'valor' => 'Valor',
            'enable' => 'Enable',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrecioproductoordens()
    {
        return $this->hasMany(Precioproductoorden::className(), ['cantidad' => 'idCantidadPlacas']);
    }
}
