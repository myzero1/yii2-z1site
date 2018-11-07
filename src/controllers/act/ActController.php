<?php
namespace myzero1\z1site\controllers;

use myzero1\z1site\controllers\base\BaseActController;

/**
 * update the controller of action,add,modify the view, rewrite,del
 */
class ActController extends BaseActController
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'added' => [ // add a new ation
                'class' => 'myzero1\z1site\controllers\actions\EgAction',
                'view' => '@vendor/myzero1/yii2-z1site/src/views/act/eg',
                // 'layout' => '@vendor/myzero1/yii2-theme-layui/src/views/layouts/layout',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            if ($action->id === 'modify-view') { // change the view
                \myzero1\z1site\components\Helper::changeActionView('@vendor/myzero1/yii2-z1site/src/views/act/new');
            }

            if ($action->id === 'deled') { // del a aciton
                throw new \yii\web\HttpException(404);
            }

            return true;
        }

        return false;
    }

    /**
     * rewrite all action
     * @return string
     */
    public function actionModify()
    {
        return $this->render('pd', ['position' => 'modified action in '. __FILE__]);
    }
}
