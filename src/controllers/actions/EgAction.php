<?php
/**
 * @link https://github.com/myzero1
 * @copyright MIT
 * @license http://www.yiiframework.com/license/
 */

namespace myzero1\z1site\controllers\actions;

use Yii;
use yii\base\Action;
use yii\base\Exception;
use yii\base\UserException;

/**
 * Eg action for acitons.
 *
 * To use EgAction, you need to do the following steps:
 *
 * First, declare an action of EgAction type in the `actions()` method of your `Controller`
 * class (or whatever controller you prefer), like the following:
 *
 * ```php
 * public function actions()
 * {
 *     return [
 *         'eg' => [
                'class' => 'myzero1\z1site\controllers\actions\EgAction'],
                'view' => '@app/modules/z1site/views/site/eg',
                // 'layout' => 'index',
 *     ];
 * }
 * ```
 *
 * Then, create a view file for this action. If the route of your the action is `site/eg`, then
 * the view file should be `views/site/eg.php`. In this view file, the following variables are available:
 *
 * - `$view`: the view of action
 * - `$layout`: the layout of action
 *
 * @author Xuanwu qin <myzero1@sina.com>
 * @since 2.0
 */
class EgAction extends Action
{
    /**
     * @var string the view file to be rendered. If not set, it will take the value of [[id]].
     * That means, if you name the action as "eg" in "SiteController", then the view name
     * would be "eg", and the corresponding view file would be "views/site/eg.php".
     */
    public $view;
    /**
     * @var string|false|null the name of the layout to be applied to this error action view.
     * If not set, the layout configured in the controller will be used.
     * @see \yii\base\Controller::$layout
     * @since 2.0.14
     */
    public $layout;

    /**
     * Runs the action.
     *
     * @return string result content
     */
    public function run()
    {
        if ($this->layout !== null) {
            $this->controller->layout = $this->layout;
        }

        if ($this->view === null) {
            $this->view = $this->id;
        }

        return $this->controller->render($this->view,[]);
    }
}
