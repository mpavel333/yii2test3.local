<?php

namespace app\modules\admin;
use Yii;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {

        if(!isset(Yii::$app->user->id)) 
            Yii::$app->response->redirect('site/login', 301)->send();
        
        parent::init();

        // custom initialization code goes here



    }


}
