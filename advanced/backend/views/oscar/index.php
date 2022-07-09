<?php
/**
* Team: DBIS学前班
* coding by STU_02 STU_ID_02
* 这里是后端的奥斯卡页面的视图文件
*/
?>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OscarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '奥斯卡奖';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oscar-index">

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
            'year',
            'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
