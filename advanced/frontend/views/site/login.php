<?php
/**
* Team: DBIS学前班
* coding by STU_02 STU_ID_02 STU_03 STU_ID_03 STU_01 STU_ID_01
* 这里是前端的登陆页面的视图文件
*/
?>

<style>
    body{background:url(img/bk/登陆背景.jpg)no-repeat fixed;background-size:cover;}
</style>
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = '登陆';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>请填写您的用户名和密码：</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    忘记密码？ <?= Html::a('点我重置', ['site/request-password-reset']) ?>.
                    <br>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('登陆', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
