<?php

namespace frontend\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01
* 这里是前端的书籍页面模型文件
*/

/**
 * This is the model class for table "book".
 *
 * @property string $id 编号
 * @property string $name 名称
 * @property string $writer 作者
 * @property string $country 国家
 * @property string $classification 分类
 * @property string $posted_date 出版时间
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'writer', 'country', 'classification', 'posted_date'], 'required'],
            [['id'], 'string', 'max' => 5],
            [['name', 'writer', 'classification', 'posted_date'], 'string', 'max' => 20],
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
            'id' => '序号',
            'name' => '书名',
            'writer' => '作者',
            'country' => '国家',
            'classification' => '类别',
            'posted_date' => '出版日期',
        ];
    }
}
