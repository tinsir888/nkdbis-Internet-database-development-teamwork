<?php
/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是前端的艾美奖页面的视图文件
*/
?>

<style>
    body{background:url(img/bk/艾美奖.jpg)no-repeat fixed;background-size:cover;}
</style>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EmmySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '艾美奖';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emmy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>今日推荐<p>
        <img src="img/emmy/绝命毒师.jpg"style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
        <a  href="https://tv.sohu.com/v/MjAxMjA3MjYvbjM0OTExNDM1Mi5zaHRtbA==.html?txid=9075b2a7de230eeef8505336cfdc34ae" >
            <p>《绝命毒师》<p>
        </a>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    ]); ?>


</div>
