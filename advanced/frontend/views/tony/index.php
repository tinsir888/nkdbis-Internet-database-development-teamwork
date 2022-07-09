<?php
/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01
* 这里是前端的托尼奖页面的视图文件
*/
?>

<style>
    body{background:url(img/bk/托尼背景.jpg)no-repeat fixed;background-size:cover;}
</style>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TonySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '托尼奖';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tony-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>今日推荐<p>
        <img src="img/tony/歌剧魅影.jpg"style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
        <a  href="https://www.bilibili.com/video/BV1nW411L7wQ?from=search&seid=4065218547754417559&spm_id_from=333.337.0.0" >
            <p>《歌剧魅影》<p>
        </a>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    ]); ?>


</div>
