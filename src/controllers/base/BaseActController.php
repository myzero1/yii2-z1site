<?php
namespace myzero1\z1site\controllers\base;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use myzero1\z1site\models\LoginForm;

/**
 * Base site controller
 */
class BaseActController extends Controller
{
    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionOld()
    {
        return $this->render('pd', ['position' => 'old action']);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionMod()
    {
        return $this->render('pd', ['position' => 'modified action']);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionModView()
    {
        return $this->render('pd', ['position' => 'modified view action']);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionDel()
    {
        return $this->render('pd', ['position' => 'deled action']);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionClassRewrite()
    {
        $model = new LoginForm();
        $model->rewrite();
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionClassAdd()
    {
        $model = new LoginForm();
        $model->add();
    }
}
