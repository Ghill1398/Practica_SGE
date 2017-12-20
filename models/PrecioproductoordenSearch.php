<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Precioproductoorden;

/**
 * PrecioproductoordenSearch represents the model behind the search form about `app\models\Precioproductoorden`.
 */
class PrecioproductoordenSearch extends Precioproductoorden
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPrecioProductoOrden', 'fk_idProductoStock', 'fk_idTipoCliente', 'hora', 'cantidad'], 'integer'],
            [['precioSF', 'precioCF'], 'number'],
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
        $query = Precioproductoorden::find();

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
            'idPrecioProductoOrden' => $this->idPrecioProductoOrden,
            'fk_idProductoStock' => $this->fk_idProductoStock,
            'fk_idTipoCliente' => $this->fk_idTipoCliente,
            'hora' => $this->hora,
            'cantidad' => $this->cantidad,
            'precioSF' => $this->precioSF,
            'precioCF' => $this->precioCF,
        ]);

        return $dataProvider;
    }
}
