<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Drama;

/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是后端的戏剧页面的模型查找文件
*/

/**
 * DramaSearch represents the model behind the search form of `backend\models\Drama`.
 */
class DramaSearch extends Drama
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'writer', 'country', 'classification'], 'safe'],
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
        $query = Drama::find();

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
            ->andFilterWhere(['like', 'writer', $this->writer])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'classification', $this->classification]);

        return $dataProvider;
    }
}
