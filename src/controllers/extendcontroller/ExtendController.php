<?php
namespace myzero1\z1site\controllers\extendcontroller;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use myzero1\z1site\models\LoginForm;

/**
 * Base site controller
 */
class ExtendController extends Controller
{
    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionExtend1()
    {
        var_dump('actionExtend1');exit;
        return $this->render('placeholder', ['position' => $position]);
    }
}
