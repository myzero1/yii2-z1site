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
    public function actionModify()
    {
        return $this->render('pd', ['position' => 'modified action']);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionModifyView()
    {
        return $this->render('pd', ['position' => 'modified view action']);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionDeled()
    {
        return $this->render('pd', ['position' => 'deled action']);
    }
}
