<?php

namespace app\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是前端的艾美奖页面模型文件
*/

/**
 * This is the model class for table "emmy".
 *
 * @property string $id
 * @property string $name
 * @property string $year
 * @property string $type
 */
class Emmy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emmy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'year', 'type'], 'required'],
            [['id'], 'string', 'max' => 10],
            [['name', 'year', 'type'], 'string', 'max' => 20],
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
            'name' => '名称',
            'year' => '年份',
            'type' => '奖项',
        ];
    }
}
