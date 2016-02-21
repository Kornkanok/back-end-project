<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bus;

/**
 * BusSearch represents the model behind the search form about `app\models\Bus`.
 */
class BusSearch extends Bus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_id'], 'integer'],
            [['b_name'], 'safe'],
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
        $query = Bus::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'b_id' => $this->b_id,
        ]);

        $query->andFilterWhere(['like', 'b_name', $this->b_name]);

        return $dataProvider;
    }
}
