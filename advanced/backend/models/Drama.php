<?php

namespace backend\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是后端的戏剧页面的模型文件
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
            'id' => 'ID',
            'name' => 'Name',
            'writer' => 'Writer',
            'country' => 'Country',
            'classification' => 'Classification',
        ];
    }
}
