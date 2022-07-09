<?php

namespace app\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是前端的音乐页面模型文件
*/

/**
 * This is the model class for table "music".
 *
 * @property string $id 编号
 * @property string $name 名称
 * @property string $singer 歌手
 * @property string $country 国家
 * @property string $classification 分类
 * @property string $posted_date 发行时间
 */
class Music extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'music';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'singer', 'country', 'classification', 'posted_date'], 'required'],
            [['id'], 'string', 'max' => 5],
            [['name', 'singer', 'classification', 'posted_date'], 'string', 'max' => 20],
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
            'name' => '歌曲名',
            'singer' => '歌手',
            'country' => '国籍',
            'classification' => '分类',
            'posted_date' => '发行日期',
        ];
    }
}
