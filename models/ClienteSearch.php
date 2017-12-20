<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form about `app\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCliente', 'fk_idTipoCliente', 'enable', 'fk_idSucursal'], 'integer'],
            [['nombreCompleto', 'nombreNegocio', 'nombreResponsable', 'correo', 'fechaRegistro', 'telefono', 'direccion', 'nitCi', 'codigoCliente'], 'safe'],
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
        $query = Cliente::find();

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
            'idCliente' => $this->idCliente,
            'fk_idTipoCliente' => $this->fk_idTipoCliente,
            'fechaRegistro' => $this->fechaRegistro,
            'enable' => $this->enable,
            'fk_idSucursal' => $this->fk_idSucursal,
        ]);

        $query->andFilterWhere(['like', 'nombreCompleto', $this->nombreCompleto])
            ->andFilterWhere(['like', 'nombreNegocio', $this->nombreNegocio])
            ->andFilterWhere(['like', 'nombreResponsable', $this->nombreResponsable])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'nitCi', $this->nitCi])
            ->andFilterWhere(['like', 'codigoCliente', $this->codigoCliente]);

        return $dataProvider;
    }
}
