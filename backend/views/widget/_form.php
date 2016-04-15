<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;
?>

<div class="col-lg-6" style="margin-top: 10px">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->label('标题')->textInput() ?>
    <?= $form->field($model, 'type')->label('类型')->dropDownList([1 => '红色', 2 => '白色', 3 => '蓝色']) ?>
    <?= $form->field($model, 'tags')->label('标签')->checkboxList([1 => '红色', 2 => '白色', 3 => '蓝色']) ?>
    <?= $form->field($model, 'sex')->label('性别')->radioList(['1'=>'男','0'=>'女'],['separator'=>'']) ?>
    <?= $form->field($model, 'start_date')->widget(
        DatePicker::className(), [
        'inline' => false,
        'language' => 'zh-CN' , //--设置为中文
        'clientOptions' => [
            'autoclose' => false,
            'format' => 'yyyy-mm-dd'
        ]])->label('开始日期')?>

    <?= $form->field($model, 'end_date')->widget(
        DatePicker::className(), [
        'inline' => false,
        'language' => 'zh-CN' , //--设置为中文
        'clientOptions' => [
            'autoclose' => false,
            'format' => 'yyyy-mm-dd'
        ]])->label('结束日期') ?>
    <?= $form->field($model, 'description')->label('描述')->textarea(['rows'=>3]) ?>

    <?= Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
    <?= Html::resetButton('重置', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
    <?php ActiveForm::end(); ?>
</div>
