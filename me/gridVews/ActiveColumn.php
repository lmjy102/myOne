<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/16/016
 * Time: 14:11
 */
namespace me\gridVews;
class ActiveColumn extends \yii\grid\ActionColumn{
    public $header = '操作';
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }
}