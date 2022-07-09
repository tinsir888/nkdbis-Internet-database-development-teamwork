<?php
/**
* Team: DBIS学前班
* coding by STU_01 STU_ID_01
* 这里是前端的游戏页面的视图文件
*/
?>

<style>
    body{background:url(img/bk/游戏背景.jpg)no-repeat fixed;background-size:cover;}
</style>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '游戏';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>今日推荐<p>
        <img src="img/game/死亡搁浅.jpg"style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
        <a  href="https://www.gamersky.com/z/deathstranding/" >
            <p>死亡搁浅<p>
        </a>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

    ]); ?>


</div>
