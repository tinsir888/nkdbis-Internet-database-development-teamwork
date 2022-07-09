<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Music;

/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是前端的音乐页面模型查找文件
*/

/**
 * MusicSearch represents the model behind the search form of `app\models\Music`.
 */
class MusicSearch extends Music
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'singer', 'country', 'classification', 'posted_date'], 'safe'],
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
        $query = Music::find();

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
            ->andFilterWhere(['like', 'singer', $this->singer])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'classification', $this->classification])
            ->andFilterWhere(['like', 'posted_date', $this->posted_date]);

        return $dataProvider;
    }
}
