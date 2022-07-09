<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tv */

$this->title = 'Create Tv';
$this->params['breadcrumbs'][] = ['label' => 'Tvs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
