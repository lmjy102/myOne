<?php

namespace me\modules\post\models;

use Yii;

/**
 * This is the model class for table "{{%lulu_content}}".
 *
 * @property integer $id
 * @property integer $taxonomy_id
 * @property integer $user_id
 * @property string $user_name
 * @property integer $last_user_id
 * @property string $last_user_name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $focus_count
 * @property integer $favorite_count
 * @property integer $view_count
 * @property integer $comment_count
 * @property integer $agree_count
 * @property integer $against_count
 * @property integer $recommend
 * @property integer $headline
 * @property integer $sticky
 * @property integer $flag
 * @property integer $allow_comment
 * @property string $password
 * @property string $view
 * @property string $layout
 * @property integer $sort_num
 * @property integer $visibility
 * @property integer $status
 * @property string $content_type
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $title
 * @property string $sub_title
 * @property string $url_alias
 * @property string $redirect_url
 * @property string $summary
 * @property string $thumb
 * @property string $thumbs
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lulu_content}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['taxonomy_id', 'user_id', 'last_user_id', 'created_at', 'updated_at', 'focus_count', 'favorite_count', 'view_count', 'comment_count', 'agree_count', 'against_count', 'recommend', 'headline', 'sticky', 'flag', 'allow_comment', 'sort_num', 'visibility', 'status'], 'integer'],
            [['user_id', 'created_at', 'updated_at', 'content_type', 'title'], 'required'],
            [['user_name', 'last_user_name', 'password', 'view', 'layout', 'content_type'], 'string', 'max' => 64],
            [['seo_title', 'seo_keywords', 'seo_description', 'title', 'sub_title', 'url_alias', 'redirect_url', 'thumb'], 'string', 'max' => 256],
            [['summary'], 'string', 'max' => 512],
            [['thumbs'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'taxonomy_id' => 'Taxonomy ID',
            'user_id' => 'User ID',
            'user_name' => '用户名',
            'last_user_id' => 'Last User ID',
            'last_user_name' => 'Last User Name',
            'created_at' => '创建时间',
            'updated_at' => '修改时间',
            'focus_count' => 'Focus Count',
            'favorite_count' => 'Favorite Count',
            'view_count' => '浏览次数',
            'comment_count' => '评论次数',
            'agree_count' => 'Agree Count',
            'against_count' => 'Against Count',
            'recommend' => 'Recommend',
            'headline' => 'Headline',
            'sticky' => 'Sticky',
            'flag' => 'Flag',
            'allow_comment' => 'Allow Comment',
            'password' => 'Password',
            'view' => 'View',
            'layout' => 'Layout',
            'sort_num' => 'Sort Num',
            'visibility' => 'Visibility',
            'status' => '状态',
            'content_type' => 'Content Type',
            'seo_title' => 'Seo Title',
            'seo_keywords' => 'Seo Keywords',
            'seo_description' => 'Seo Description',
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'url_alias' => 'Url Alias',
            'redirect_url' => 'Redirect Url',
            'summary' => 'Summary',
            'thumb' => 'Thumb',
            'thumbs' => 'Thumbs',
        ];
    }
}
