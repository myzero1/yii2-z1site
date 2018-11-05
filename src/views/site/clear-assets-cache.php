<?php
use yii\helpers\Html;

$formStr = sprintf('%s%s%s',
    Html::beginForm(['site/clear-assets-cache'], 'post'),
    Html::submitButton(
        '点击本按钮清理静态缓存',
        ['class' => 'layui-btn layui-btn-normal']
    ),
    Html::endForm())

?>
<blockquote class="layui-elem-quote">
    清理静态文件缓存。将会删除缓存的所有静态文件，包括css，js和图片。<span class="layui-red">若超时请多试几次（可能静态文件太多了）</span>
</blockquote>
<fieldset class="layui-elem-field layui-field-title magt30">
    <legend>实际操作</legend>
</fieldset>
<p>
    在清理静态缓存时，我们做的事情很简单，就是点击下面的“清理静态缓存”按钮等待返回成功就好了。具体的操作，由程序在后台自动完成。
</p>
<br/>

<?=$formStr?>