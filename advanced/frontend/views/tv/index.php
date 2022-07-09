<?php
/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是前端的电视剧页面的视图文件
*/
?>

<style>
    body{background:url(img/bk/电视剧背景.jpg)no-repeat fixed;background-size:cover;}
</style>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TvSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '电视剧';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tv-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>今日推荐<p>
        <img src="img/tv/越狱.jpg"style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
        <a  href="http://www.mjlzl.com/vodplay/32837-2-1.html" >
            <p>《越狱》<p>
        </a>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    ]); ?>


</div>
