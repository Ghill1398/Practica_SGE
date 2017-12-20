<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horaplacas".
 *
 * @property integer $idHoraPlacas
 * @property string $value
 * @property integer $enable
 *
 * @property Precioproductoorden[] $precioproductoordens
 */
class Horaplacas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'horaplacas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'enable'], 'required'],
            [['value'], 'safe'],
            [['enable'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idHoraPlacas' => 'Id Hora Placas',
            'value' => 'Value',
            'enable' => 'Enable',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrecioproductoordens()
    {
        return $this->hasMany(Precioproductoorden::className(), ['hora' => 'idHoraPlacas']);
    }
}
