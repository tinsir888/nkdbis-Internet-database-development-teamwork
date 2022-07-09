<?php

namespace app\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01
* 这里是前端的戏剧页面模型文件
*/

/**
 * This is the model class for table "drama".
 *
 * @property string $id
 * @property string $name
 * @property string $writer
 * @property string $country
 * @property string $classification
 */
class Drama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'writer', 'country', 'classification'], 'required'],
            [['id'], 'string', 'max' => 10],
            [['name', 'writer', 'country', 'classification'], 'string', 'max' => 20],
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
            'name' => '戏剧名',
            'writer' => '作者',
            'country' => '国别',
            'classification' => '分类',
        ];
    }
}
