<?php
/**
* Team: DBIS学前班
* coding by STU_02 STU_ID_02
* 这里是前端的电影页面视图
*/
?>

<style>
    body{background:url(img/bk/电影背景.jpg)no-repeat fixed;background-size:cover;}
</style>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MovieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '电影';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>今日推荐<p>
        <img src="img/movie/黑客帝国.jpg"style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
        <a  href="https://www.iqiyi.com/v_19rra84w3o.html?vfm=2008_aldbd&fc=828fb30b722f3164&fv=p_02_01" >
            <p>《黑客帝国》<p>
        </a>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    ]); ?>


</div>
