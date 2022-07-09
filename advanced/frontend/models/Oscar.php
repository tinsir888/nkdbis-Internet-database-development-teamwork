<?php

namespace app\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_02 STU_ID_02
* 这里是前端的奥斯卡奖的模型文件
*/

/**
 * This is the model class for table "oscar".
 *
 * @property string $id
 * @property string $name 名称
 * @property string $year 获奖年份
 * @property string $type 获奖类型
 */
class Oscar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oscar';
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
            'year' => '获奖年份',
            'type' => '奖项',
        ];
    }
}
