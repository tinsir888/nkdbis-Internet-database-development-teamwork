<?php

namespace frontend\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是前端的电视剧页面模型文件
*/

/**
 * This is the model class for table "tv".
 *
 * @property string $id 编号
 * @property string $name 名称
 * @property string $director 导演
 * @property string $country 国家
 * @property string $classification 分类
 * @property string $posted_date 上映时间
 */
class Tv extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tv';
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
            'id' => '序号',
            'name' => '电视剧名',
            'director' => '导演',
            'country' => '国家',
            'classification' => '分类',
            'posted_date' => '播出时间',
        ];
    }
}
