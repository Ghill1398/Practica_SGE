<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ordendetalle;

/**
 * OrdendetalleSearch represents the model behind the search form about `app\models\Ordendetalle`.
 */
class OrdendetalleSearch extends Ordendetalle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idOrdenDetalleServicio', 'fk_idProductoStock', 'cantidad', 'C', 'M', 'Y', 'K', 'fk_idOrden', 'fk_idMovimientoStock'], 'integer'],
            [['trabajo'], 'safe'],
            [['pinza', 'resolucion', 'costo', 'adicional', 'total'], 'number'],
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
        $query = Ordendetalle::find();

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
            'idOrdenDetalleServicio' => $this->idOrdenDetalleServicio,
            'fk_idProductoStock' => $this->fk_idProductoStock,
            'cantidad' => $this->cantidad,
            'C' => $this->C,
            'M' => $this->M,
            'Y' => $this->Y,
            'K' => $this->K,
            'pinza' => $this->pinza,
            'resolucion' => $this->resolucion,
            'costo' => $this->costo,
            'adicional' => $this->adicional,
            'total' => $this->total,
            'fk_idOrden' => $this->fk_idOrden,
            'fk_idMovimientoStock' => $this->fk_idMovimientoStock,
        ]);

        $query->andFilterWhere(['like', 'trabajo', $this->trabajo]);

        return $dataProvider;
    }
}
