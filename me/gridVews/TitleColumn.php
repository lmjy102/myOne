<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/16/016
 * Time: 11:34
 */
namespace me\gridVews;
//use yii\grid\Column;
use yii\grid\DataColumn;

class TitleColumn extends DataColumn {
    public $attribute = 'title';
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->contentOptions = ['width' => 'auto'];
        $this->header = '标题';
    }
}