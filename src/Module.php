<?php

namespace myzero1\z1site;

/**
 * z1site module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'myzero1\z1site\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here

        \Yii::$app->params['myzero1']['yii2_z1site']['id'] = $this->id;

        // var_dump(\Yii::$app->getRuntimePath());exit;
    }
}
