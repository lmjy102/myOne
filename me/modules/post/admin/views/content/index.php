<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel me\modules\post\models\searchs\searchContent */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建内容', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'layout' => "{items}\n{pager}",
        //'options' => '',
        'showOnEmpty' => false,
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
            ['class'=>'yii\grid\CheckboxColumn'],

            //'id',
            ['class' => 'me\gridVews\IdColumn'],
            //'title',
            [
                'attribute'=>'title',
                'contentOptions' => [
                    'style' => 'white-space:normal;',
                ]
            ],
            //['class' => 'me\gridVews\TitleColumn' ],
            //'updated_at',
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:Y年m月d日'],
            ],
            'user_name',
            'comment_count',
            'view_count',
            'status',
            //'view',
            //'taxonomy_id',
            //'user_id',
            //'last_user_id',
            // 'last_user_name',
            // 'created_at',
            // 'focus_count',
            // 'favorite_count',
            // 'agree_count',
            // 'against_count',
            // 'recommend',
            // 'headline',
            // 'sticky',
            // 'flag',
            // 'allow_comment',
            // 'password',
            // 'layout',
            // 'sort_num',
            // 'visibility',
            // 'content_type',
            // 'seo_title',
            // 'seo_keywords',
            // 'seo_description',
            // 'sub_title',
            // 'url_alias:url',
            // 'redirect_url:url',
            // 'summary',
            // 'thumb',
            // 'thumbs',

            [
                    'header' => '操作',
                    'class' => 'me\gridVews\ActiveColumn'
            ],
        ],
        'emptyText'=>'当前没有会员',
        'emptyTextOptions' => ['style'=>'color:red;font-weight:bold'],
        //'exptyText'=>['style'=>'color:red;font-weight:bold'],
    ]); ?>

</div>
