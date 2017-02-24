<?php

namespace me\modules\post\admin;

class AdminModule extends \yii\base\Module
{
    public $controllerNamespace = 'me\modules\post\admin\controllers';
    public $defaultRoute = 'content';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
