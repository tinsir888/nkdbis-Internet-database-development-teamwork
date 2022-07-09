<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Emmy;

/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是后端的艾美奖页面的模型查找文件
*/

/**
 * EmmySearch represents the model behind the search form of `backend\models\Emmy`.
 */
class EmmySearch extends Emmy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'year', 'type'], 'safe'],
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
        $query = Emmy::find();

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
            ->andFilterWhere(['like', 'year', $this->year])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
