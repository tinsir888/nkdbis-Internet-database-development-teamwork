<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Oscar */

$this->title = 'Create Oscar';
$this->params['breadcrumbs'][] = ['label' => 'Oscars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oscar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
