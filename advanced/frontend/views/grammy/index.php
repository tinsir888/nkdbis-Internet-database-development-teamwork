<?php
/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是前端的格莱美奖页面的视图文件
*/
?>

<style>
    body{background:url(img/bk/格莱美背景.jpg)no-repeat fixed;background-size:cover;}
</style>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GrammySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '格莱美奖';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grammy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>今日推荐<p>
        <img src="img/grammy/lover.jpg"style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
        <a  href="https://www.bilibili.com/video/BV1j4411R7YH?from=search&seid=17461750517106249302&spm_id_from=333.337.0.0" >
            <p>Lover-Taylor Swift<p>
        </a>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    ]); ?>


</div>
