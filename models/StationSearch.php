<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Station;

/**
 * StationSearch represents the model behind the search form about `app\models\Station`.
 */
class StationSearch extends Station
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['station_id', 'station_zoom'], 'integer'],
            [['station_name', 'station_lat', 'station_lon', 'station_type'], 'safe'],
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
        $query = Station::find();

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
            'station_id' => $this->station_id,
            'station_zoom' => $this->station_zoom,
        ]);

        $query->andFilterWhere(['like', 'station_name', $this->station_name])
            ->andFilterWhere(['like', 'station_lat', $this->station_lat])
            ->andFilterWhere(['like', 'station_lon', $this->station_lon])
            ->andFilterWhere(['like', 'station_type', $this->station_type]);

        return $dataProvider;
    }
}
