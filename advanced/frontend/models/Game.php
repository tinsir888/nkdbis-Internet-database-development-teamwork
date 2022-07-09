<?php

namespace app\models;

use Yii;

/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01
* 这里是前端的游戏页面模型文件
*/

/**
 * This is the model class for table "game".
 *
 * @property string $id
 * @property string $name
 * @property string $company
 * @property string $country
 * @property string $classification
 * @property string $posted_date
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'company', 'country', 'classification', 'posted_date'], 'required'],
            [['id'], 'string', 'max' => 10],
            [['name', 'company', 'country', 'classification', 'posted_date'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'name' => '游戏名',
            'company' => '制作公司',
            'country' => '国家',
            'classification' => '分类',
            'posted_date' => '发行日期',
        ];
    }
}
