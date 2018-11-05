<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$statusCode = Yii::$app->getResponse()->statusCode;

if ($statusCode == 403) {
    $message = '叫你乱跑，没权限被拦住了吧！';
} else if ($statusCode == 500) {
    $message = '内部错误，有的人要扣奖金了吧！';
}

?>

<?php if ($statusCode == 404): ?>
    <div class="noFind">
        <div class="ufo">
            <i class="seraph icon-test ufo_icon"></i>
            <i class="layui-icon page_icon">&#xe638;</i>
        </div>
        <div class="page404">
    <!--            <i class="layui-icon">&#xe61c;</i>
            <p>我勒个去，页面被外星人挟持了!</p> -->
            <i class="z1iconfont z1icon-tip-layout"></i>
            <span style="font-size: 3.5em;margin-top: -1.5em;margin-left: -0.85em;position: absolute;">404</span>
            <p>我勒个去，页面被外星人挟持了!</p>
        </div>
    </div>
<?php else: ?>
    <div class="z1msg">
    <!--         <div class="ufo">
            <i class="seraph icon-test ufo_icon"></i>
            <i class="layui-icon page_icon">&#xe638;</i>
        </div> -->
        <div class="z1tip">
            <i class="z1iconfont z1icon-tip-layout"></i>
            <span style="font-size: 3.5em;margin-top: -1.6em;margin-left: -0.85em;position: absolute;"><?=$statusCode?></span>
            <p><?=$message?></p>
        </div>
    </div>
<?php endif ?>