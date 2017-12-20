<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Movimientostock;

/**
 * MovimientostockSearch represents the model behind the search form about `app\models\Movimientostock`.
 */
class MovimientostockSearch extends Movimientostock
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMovimientoStock', 'fk_idProducto', 'fk_idStockOrigen', 'fk_idStockDestino', 'fk_idUser', 'cantidad', 'cierre'], 'integer'],
            [['time', 'observaciones'], 'safe'],
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
        $query = Movimientostock::find();

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
            'idMovimientoStock' => $this->idMovimientoStock,
            'fk_idProducto' => $this->fk_idProducto,
            'fk_idStockOrigen' => $this->fk_idStockOrigen,
            'fk_idStockDestino' => $this->fk_idStockDestino,
            'time' => $this->time,
            'fk_idUser' => $this->fk_idUser,
            'cantidad' => $this->cantidad,
            'cierre' => $this->cierre,
        ]);

        $query->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
