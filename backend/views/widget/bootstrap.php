<?php

use yii\bootstrap\Tabs;

?>
<div class="site-index" style="margin-top: 10%;margin-left: 10%">
    <?php
    echo Tabs::widget([
        'items' => [
            [
                'label' => '表单样式',
                'content' => $this->render('_form', ['model' => $model]),
                'active' => true
            ],
            [
                'label' => '查询样式',
                'content' => $this->render('_search'),
            ],
        ],
    ]);
    ?>

</div>
