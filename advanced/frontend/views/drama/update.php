<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Drama */

$this->title = 'Update Drama: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
