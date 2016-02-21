<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Descriptionvan;

/**
 * DescriptionvanSearch represents the model behind the search form about `app\models\Descriptionvan`.
 */
class DescriptionvanSearch extends Descriptionvan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['v_tion'], 'safe'],
            [['Id'], 'integer'],
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
        $query = Descriptionvan::find();

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
            'Id' => $this->Id,
        ]);

        $query->andFilterWhere(['like', 'v_tion', $this->v_tion]);

        return $dataProvider;
    }
}
