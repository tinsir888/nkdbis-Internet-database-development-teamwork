<?php
/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01
* 这里是前端的戏剧页面的视图文件
*/
?>

<style>
    body{background:url(img/bk/戏剧背景.jpg)no-repeat fixed;background-size:cover;}
</style>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DramaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '戏剧';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drama-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>今日推荐<p>
        <img src="img/drama/霸王别姬.jpg"style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
        <a  href="https://www.bilibili.com/video/BV11s411T78h?from=search&seid=17339185366373211639&spm_id_from=333.337.0.0" >
            <p>《霸王别姬》<p>
        </a>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

    ]); ?>


</div>
