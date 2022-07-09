<?php
/**
* Team: DBIS学前班
* coding by STU_02 STU_ID_02 STU_03 STU_ID_03 STU_01 STU_ID_01
* 这里是前端的留言板页面的视图文件
*/
?>

<style>
    body{background:url(img/bk/留言板背景.jpg)no-repeat fixed;background-size:cover;}
</style>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BoardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '留言板';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="board-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>分享你的热爱<p>
        <p>
        <?= Html::a('我要留言', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    ]); ?>

</div>
