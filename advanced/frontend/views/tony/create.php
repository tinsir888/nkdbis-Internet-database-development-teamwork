<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tony */

$this->title = 'Create Tony';
$this->params['breadcrumbs'][] = ['label' => 'Tonies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tony-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
