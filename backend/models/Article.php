<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property integer $area
 * @property string $publish_time
 * @property integer $has_question
 * @property string $question
 * @property string $answers
 * @property string $answer
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => function () {
                    return date('Y-m-d H:i:s', intval(YII_BEGIN_TIME));
                }
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area', 'has_question'], 'integer'],
            [['publish_time', 'created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 256],
            [['answers'], 'string', 'max' => 512],
            [['created_by', 'updated_by'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'area' => '地址',
            'publish_time' => '发布时间',
            'has_question' => '是否添加问题',
            'answers' => '答案',
            'created_at' => '创建时间',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    public static $areas=[
        1=>'北京',
        2=>'上海',
        3=>'深圳',
        4=>'广州'
    ]
    ;
}