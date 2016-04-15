<?php

/* @var $this \yii\web\View */
/* @var $content string */
use kartik\sidenav\SideNav;
use backend\assets\AppAsset;
use yii\helpers\Html;
use mdm\admin\components\MenuHelper;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" style="margin-left: 5%; margin-right:5%">
    <?php if(!Yii::$app->user->isGuest) {?>
        <div class="col-lg-2" style="margin-top: 5%">
            <?php
            $type=SideNav::TYPE_DEFAULT;
            $heading='导航';
            $item='';
            echo SideNav::widget([
                'type' => $type,
                'encodeLabels' => false,
                'heading' => $heading,
                'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id)
            ]);
            ?>
        </div>
        <div class="col-lg-9">
            <?= $content ?>
        </div>
    <?php }else{?>
    <div class="col-lg-12">
        <?= $content ?>
    </div>
    <?php } ?>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Yii2通用后台系统 <?= date('Y') ?></p>

        <p class="pull-right"><a href="http://leonblog.cn">回到我的博客</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
