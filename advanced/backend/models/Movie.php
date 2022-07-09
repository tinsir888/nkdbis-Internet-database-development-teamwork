<?php

namespace backend\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_02 STU_ID_02
* 这里是后端的电影页面的模型文件
*/

/**
 * This is the model class for table "movie".
 *
 * @property string $id 编号
 * @property string $name 名称
 * @property string $director 导演
 * @property string $country 国家
 * @property string $classification 分类
 * @property string $posted_date 上映时间
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'director', 'country', 'classification', 'posted_date'], 'required'],
            [['id'], 'string', 'max' => 5],
            [['name', 'director', 'classification', 'posted_date'], 'string', 'max' => 20],
            [['country'], 'string', 'max' => 10],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'director' => 'Director',
            'country' => 'Country',
            'classification' => 'Classification',
            'posted_date' => 'Posted Date',
        ];
    }
}
