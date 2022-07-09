<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Game;

/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01
* 这里是后端的游戏页面的模型查找文件
*/

/**
 * GameSearch represents the model behind the search form of `backend\models\Game`.
 */
class GameSearch extends Game
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'company', 'country', 'classification', 'posted_date'], 'safe'],
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
        $query = Game::find();

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
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'classification', $this->classification])
            ->andFilterWhere(['like', 'posted_date', $this->posted_date]);

        return $dataProvider;
    }
}
