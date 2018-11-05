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
class MainLoader extends Component
{

    /**
     * Loading the main config files.
     *
     * For example,
     *
     * ```php
     *    return myzero1\z1site\components\MainLoader::loader(function(){
     *      return sprintf('%s/vendor/myzero1/yii2-z1site/src/config/main.php', dirname(dirname(__DIR__)));
     *       // return sprintf('%s/modules/z1site/config/main.php', dirname(__DIR__));
     *  });
     * ```
     *
     * @param closures      $func       the $func will return the config file
     * @throws string                   if the file name of the $func is not correct.
     * @return array        $config     the app will loading the $config array.
     */
    public static function loader($func)
    {
        $cnfName = $func();

        if (!is_file($cnfName)) {
            exit("Not Found the config file '$cnfName'");
        } else {
            $config = require $cnfName;
        }

        return $config;
    }

    /**
     * Get the root path of the app.
     *
     *
     * For example,
     *
     * ```php
     *    myzero1\z1site\components\MainLoader::getAppPath();
     * ```
     *

     * @return string       $appPath    the root of app.
     */
    public static function getAppPath()
    {
        $backtrace = debug_backtrace();
        $end = end($backtrace);
        $appPath = dirname(dirname($end['file']));

        return $appPath;
    }

}
