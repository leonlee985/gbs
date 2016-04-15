<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="row" style="margin-top: 5%">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading" style="text-align:center"><h2 class="panel-title" >登录</h2></div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div class="form-group">
                        <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>