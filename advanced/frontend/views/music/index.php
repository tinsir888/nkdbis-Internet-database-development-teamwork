<?php
/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是前端的音乐页面的视图文件
*/
?>

<style>
    body{background:url(img/bk/音乐背景.jpg)no-repeat fixed;background-size:cover;}
</style>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MusicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '音乐';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="music-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>今日推荐<p>
        <img src="img/music/一路向北.jpg"style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
        <a  href="https://www.bilibili.com/video/BV1mD4y1U7z9?spm_id_from=333.999.0.0" >
            <p>一路向北-周杰伦<p>
        </a>
    </div>
<!--
    这里是生成新的记录的按钮
    <p>
        <?= Html::a('Create Music', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

    ]); ?>


</div>
