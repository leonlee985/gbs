<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "article_tags".
 *
 * @property integer $id
 * @property integer $article_id
 * @property integer $tag_id
 */
class ArticleTags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'tag_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'tag_id' => 'Tag ID',
        ];
    }

    public static $tags_arr=[
        0=>'热点',
        1=>'财经',
        2=>'娱乐',
        3=>'汽车',
        4=>'科技',
        5=>'购物'
    ];
}