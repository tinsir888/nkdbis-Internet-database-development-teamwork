<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Grammy */

$this->title = 'Create Grammy';
$this->params['breadcrumbs'][] = ['label' => 'Grammies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grammy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
