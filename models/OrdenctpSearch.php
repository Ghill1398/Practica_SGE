<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ordenctp;

/**
 * OrdenctpSearch represents the model behind the search form about `app\models\Ordenctp`.
 */
class OrdenctpSearch extends Ordenctp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idOrdenCTP', 'cfSF', 'tipoPago', 'secuencia', 'serie', 'correlativo', 'estado', 'fk_idCliente', 'fk_idMovimientoCaja', 'fk_idSucursal', 'fk_idUserD', 'fk_idUserV', 'fk_idUserD2', 'fk_idParent', 'tipoOrden'], 'integer'],
            [['fechaGenerada', 'fechaCobro', 'fechaPlazo', 'codigoServicio', 'autorizado', 'observaciones', 'observacionesCaja', 'responsable', 'telefono', 'observacionAdicional', 'factura'], 'safe'],
            [['montoVenta', 'montoDescuento'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Ordenctp::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idOrdenCTP' => $this->idOrdenCTP,
            'fechaGenerada' => $this->fechaGenerada,
            'fechaCobro' => $this->fechaCobro,
            'cfSF' => $this->cfSF,
            'tipoPago' => $this->tipoPago,
            'fechaPlazo' => $this->fechaPlazo,
            'secuencia' => $this->secuencia,
            'serie' => $this->serie,
            'correlativo' => $this->correlativo,
            'montoVenta' => $this->montoVenta,
            'montoDescuento' => $this->montoDescuento,
            'estado' => $this->estado,
            'fk_idCliente' => $this->fk_idCliente,
            'fk_idMovimientoCaja' => $this->fk_idMovimientoCaja,
            'fk_idSucursal' => $this->fk_idSucursal,
            'fk_idUserD' => $this->fk_idUserD,
            'fk_idUserV' => $this->fk_idUserV,
            'fk_idUserD2' => $this->fk_idUserD2,
            'fk_idParent' => $this->fk_idParent,
            'tipoOrden' => $this->tipoOrden,
        ]);

        $query->andFilterWhere(['like', 'codigoServicio', $this->codigoServicio])
            ->andFilterWhere(['like', 'autorizado', $this->autorizado])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones])
            ->andFilterWhere(['like', 'observacionesCaja', $this->observacionesCaja])
            ->andFilterWhere(['like', 'responsable', $this->responsable])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'observacionAdicional', $this->observacionAdicional])
            ->andFilterWhere(['like', 'factura', $this->factura]);

        return $dataProvider;
    }
}
