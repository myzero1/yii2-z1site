<?php
/**
 * @link https://github.com/myzero1
 * @copyright MIT
 * @license http://www.yiiframework.com/license/
 */

namespace myzero1\z1site\components;

use yii\base\Component;

/**
 * MainLoader will loading config file condition.
 *
 * @author Xuanwu qin <myzero1@sina.com>
 * @since 2.0
 */
class Helper extends Component
{
    /**
     * Get the root path of the app.
     *
     *
     * For example,
     *
     * ```php
     *    myzero1\z1site\components\Helper::changeActionView('@app/modules/z1site/views/site');
     * ```
     *
     * @param   string      $z1viewPrefix       It is a path
     * @return  void
     */
    public static function changeActionView($z1actinViewPrefix)
    {
        \Yii::$classMap['yii\web\View'] = '@vendor/myzero1/yii2-z1site/src/components/libs/View.php';
        \Yii::$app->params['z1actinViewPrefix'] = \Yii::getAlias($z1actinViewPrefix);
    }

}
