<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Emmy */

$this->title = 'Create Emmy';
$this->params['breadcrumbs'][] = ['label' => 'Emmies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emmy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
