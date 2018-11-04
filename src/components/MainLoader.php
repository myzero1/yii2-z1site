<?php
/**
 * @link https://github.com/myzero1
 * @copyright MIT
 * @license http://www.yiiframework.com/license/
 */

namespace myzero1\z1site\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;
use yii\helpers\VarDumper;
use yii\web\Request;

/**
 * MainLoader will loading config file condition.
 *
 * A log target object will filter the messages logged by [[Logger]] according
 * to its [[levels]] and [[categories]] properties. It may also export the filtered
 * messages to specific destination defined by the target, such as emails, files.
 *
 * Level filter and category filter are combinatorial, i.e., only messages
 * satisfying both filter conditions will be handled. Additionally, you
 * may specify [[except]] to exclude messages of certain categories.
 *
 * @property bool $enabled Indicates whether this log target is enabled. Defaults to true. Note that the type
 * of this property differs in getter and setter. See [[getEnabled()]] and [[setEnabled()]] for details.
 * @property int $levels The message levels that this target is interested in. This is a bitmap of level
 * values. Defaults to 0, meaning  all available levels. Note that the type of this property differs in getter
 * and setter. See [[getLevels()]] and [[setLevels()]] for details.
 *
 * For more details and usage information on Target, see the [guide article on logging & targets](guide:runtime-logging).
 *
 * @author Xuanwu qin <myzero1@sina.com>
 * @since 2.0
 */
class MainLoader extends Component
{

    /**
     * Sets the message levels that this target is interested in.
     *
     * The parameter can be either an array of interested level names or an integer representing
     * the bitmap of the interested level values. Valid level names include: 'error',
     * 'warning', 'info', 'trace' and 'profile'; valid level values include:
     * [[Logger::LEVEL_ERROR]], [[Logger::LEVEL_WARNING]], [[Logger::LEVEL_INFO]],
     * [[Logger::LEVEL_TRACE]] and [[Logger::LEVEL_PROFILE]].
     *
     * For example,
     *
     * ```php
     *    myzero1\z1site\components\MainLoader::loader(function(){
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
