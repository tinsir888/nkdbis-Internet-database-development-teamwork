<?php

namespace app\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01 STU_03 STU_ID_03 STU_02 STU_ID_02
* 这里是前端的留言板页面模型文件
*/

/**
 * This is the model class for table "board".
 *
 * @property int $id
 * @property string $content
 * @property string $date
 */
class Board extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'board';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'content'], 'required'],
            [['id'], 'integer'],
            [['content'], 'string'],
            [['date'], 'safe'],
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
            'content' => '留言内容',
            'date' => '日期',
        ];
    }
}
