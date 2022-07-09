<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Book;

/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01
* 这里是后端的书籍页面的模型查找文件
*/

/**
 * BookSearch represents the model behind the search form of `backend\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'writer', 'country', 'classification', 'posted_date'], 'safe'],
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
        $query = Book::find();

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
            ->andFilterWhere(['like', 'classification', $this->classification])
            ->andFilterWhere(['like', 'posted_date', $this->posted_date]);

        return $dataProvider;
    }
}
