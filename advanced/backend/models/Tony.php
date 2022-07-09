<?php

namespace backend\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01
* 这里是后端的托尼奖页面的模型文件
*/

/**
 * This is the model class for table "tony".
 *
 * @property string $id
 * @property string $name
 * @property string $year
 * @property string $type
 */
class Tony extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tony';
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
            'id' => 'ID',
            'name' => 'Name',
            'year' => 'Year',
            'type' => 'Type',
        ];
    }
}
