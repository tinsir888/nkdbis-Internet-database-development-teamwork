<?php

namespace backend;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Movie;

/**
 * modelsMovieSearch represents the model behind the search form of `backend\models\Movie`.
 */
class modelsMovieSearch extends Movie
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'director', 'country', 'classification', 'posted_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Movie::find();

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
        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'director', $this->director])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'classification', $this->classification])
            ->andFilterWhere(['like', 'posted_date', $this->posted_date]);

        return $dataProvider;
    }
}
