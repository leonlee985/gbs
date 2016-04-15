<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

if (!empty($model->question)) {
    $question_list = explode(',', $model->question);
}
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <label class="control-label" for="article-title">标签</label>
    <select multiple class="form-control" style="margin-bottom: 10px" name="tags[]">
        <?php
        $art_tags=\backend\models\ArticleTags::find(['article_id'=>$model->id])->select('tag_id')->asArray()->all();
        if(!empty($art_tags))
        {
            $art_tags=array_column($art_tags,'tag_id');
        }
        foreach (\backend\models\ArticleTags::$tags_arr as $k => $v) {
            if(!empty($art_tags) && in_array($k,$art_tags)){
                echo "<option selected='selected' value='$k'>$v</option>";
            }else{
                echo "<option value='$k'>$v</option>";
            }

        }
        ?>
    </select>

    <?= $form->field($model, 'area')->dropDownList(\backend\models\Article::$areas) ?>

    <label class="control-label" for="article-title">发布时间</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'publish_time',
        'language' => 'zh-CN',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ],
    ]) ?>
    <p style="margin-top: 5px"></p>
    <?= $form->field($model, 'has_question')->radioList([1 => '是', 0 => '否']) ?>

    <div id="question_group" style="display: <?= $model->has_question ? 'true' : 'none' ?>">
        <?php
        if (empty($model->has_question)) {
            ?>
            <label class="control-label">问题:</label>

            <input type="text" name="question" style="margin-bottom: 12px" class="form-control" value=""/>

            <label class="control-label">答案:</label>
            <div class="form-group has-success has-feedback" id="answer_group">
                <div class="input-group" style="margin-bottom: 10px">
                    <span class="input-group-addon">A</span>
                    <input type="text" class="form-control" name="answers[]">
                </div>
                <div class="input-group" style="margin-bottom: 10px">
                    <span class="input-group-addon">B</span>
                    <input type="text" class="form-control" name="answers[]">
                </div>
            </div>

            <div class="form-group" id="answers">
                <label class="control-label" style="display: block">正确答案:</label>
                <label class="radio-inline">
                    <input type="radio" name="answer" value="0"> A
                </label>
                <label class="radio-inline">
                    <input type="radio" name="answer" value="1"> B
                </label>
            </div>
            <?php

        } else {
            ?>
            <label class="control-label">问题:</label>

            <input type="text" name="question" style="margin-bottom: 12px" class="form-control"
                   value="<?= $model->question ?>"/>

            <label class="control-label">答案:</label>
            <div class="form-group has-success has-feedback" id="answer_group">
                <?php
                $answers = explode(',', $model->answers);
                $i = 0;
                foreach ($answers as $a) {
                    $code = chr(65 + $i);
                    ?>
                    <div class="input-group" style="margin-bottom: 10px">
                        <span class="input-group-addon"><?= $code ?></span>
                        <input type="text" class="form-control" name="answers[]" value="<?= $a ?>">
                    </div>

                    <?php
                    $i++;
                }
                ?>
            </div>
            <div class="form-group" id="answers">
                <label class="control-label" style="display: block">正确答案:</label>
                <?php
                $i = 0;
                foreach ($answers as $a) {
                    $code = chr(65 + $i);
                    ?>
                    <label class="radio-inline">
                        <?php
                        if ($i == $model->answer) {
                            ?>
                            <input type="radio" name="answer" value="<?= $i ?>" checked="checked"> <?= $code ?>
                            <?php
                        } else {
                            ?>
                            <input type="radio" name="answer" value="<?= $i ?>"> <?= $code ?>
                            <?php
                        }
                        ?>
                    </label>
                    <?php
                    $i++;
                }
                ?>
            </div>

        <?php
        }
        ?>
        <div class="form-group">
            <button type="button" id="btn_add" style="margin-right: 5px" class="btn btn-success">添加</button>
            <button type="button" id="btn_del" class="btn btn-danger">删除</button>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '保存' : '更新', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $(document).ready(function () {
        //显示问题
        $("input:radio").click(function (e) {
            $show = $("input:radio")[0].checked;
            $hide = $("input:radio")[1].checked;
            if ($show) {
                $("#question_group").show();
            }
            if ($hide) {
                $("#question_group").hide();
            }
        });
        //添加答案
        $("#btn_add").click(function () {
            var answer_groupon = $("#answer_group");
            var count = answer_groupon.children().length;
            var code = String.fromCharCode(65 + count);
            var node = '<div class="input-group" style="margin-bottom: 10px"><span class="input-group-addon">' + code + '</span><input type="text" class="form-control" name="answer[]"></div>';
            var answers = $("#answers");
            var answer_node = '<label class="radio-inline"> <input type="radio" name="correct_answer" value="' + count + '"> ' + code + ' </label>';

            if (count < 5) {
                answer_groupon.append(node);
                answers.append(answer_node);
            }

        });

        //移除问题
        $("#btn_del").click(function () {
            var answer_groupon = document.getElementById('answer_group');
            var div = answer_groupon.getElementsByTagName('div');
            var count = $("#answer_group").children().length;

            var answers = document.getElementById("answers");
            var answer_label = answers.getElementsByTagName('label');

            if (count > 2) {
                var node = div[count - 1];
                answer_groupon.removeChild(node);
                answers.removeChild(answer_label[count]);
            }

        });
    });
</script>