<?php

namespace frontend\controllers;

/**
* Team: DBIS学前班
* coding by STU_02 STU_ID_02
* 这里是前端的小组成员页面的控制器文件
*/

use yii\web\Controller;


/**
 * HomeController implements the CRUD actions for home model.
 */
class HomeworkController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

}