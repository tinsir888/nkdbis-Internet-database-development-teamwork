<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Drama */

$this->title = 'Create Drama';
$this->params['breadcrumbs'][] = ['label' => 'Dramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
