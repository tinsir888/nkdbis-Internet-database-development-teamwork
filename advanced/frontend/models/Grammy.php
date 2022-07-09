<?php

namespace frontend\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是前端的格莱美奖页面模型文件
*/

/**
 * This is the model class for table "grammy".
 *
 * @property string $id
 * @property string $name
 * @property string $player
 * @property string $year
 * @property string $type
 */
class Grammy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grammy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'player', 'year', 'type'], 'required'],
            [['id'], 'string', 'max' => 10],
            [['name', 'player', 'year', 'type'], 'string', 'max' => 20],
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
            'player' => '歌手',
            'year' => '年份',
            'type' => '奖项',
        ];
    }
}
