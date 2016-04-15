<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Article;

$this->title = '文章';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'title',
            [
                'attribute' =>'area',
                'label'=>'地址',
                'value'=>function($model){
                    if($model->area){
                        return Article::$areas[$model->area];
                    }else{
                        return "";
                    }
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'area',Article::$areas,
                    ['prompt'=>'全部','class'=>'form-control']
                ),
                'headerOptions' => ['width' => '100']
            ],
            'publish_time',
            [
                'attribute' =>'has_question',
                'label'=>'是否有问题',
                'value'=>function($model){
                    $arr=[0=>'无',1=>'有'];
                    if(isset($model->has_question)){
                        return $arr[$model->has_question];
                    }else{
                        return "";
                    }
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'has_question',[0=>'无',1=>'有'],
                    ['prompt'=>'全部','class'=>'form-control']
                ),
                'headerOptions' => ['width' => '100']
            ],
             'answers',
             'created_at',
//             'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
