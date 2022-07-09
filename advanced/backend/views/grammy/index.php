<?php
/**
* Team: DBIS学前班
* coding by STU_03 STU_ID_03
* 这里是后端的格莱美奖页面的视图文件
*/
?>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GrammySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '格莱美奖';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grammy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('新添记录', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'player',
            'year',
            'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
