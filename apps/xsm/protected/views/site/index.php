<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<form action="" method="post">
    <table>
        <tr>
            <th>日期<input id="c_date" name="c_date" type="text" value="<?= date("Y-m-d") ?>"/></th>
            <th>当日本金<input id="benjin" name="benjin" type="text" value="10000"/>元</th>
            <th>当日收益<input id="shouyi" name="shouyi" type="text" value="1"/>元</th>
            <th><input id="jisuan" type="submit" value="保存"/></th>
            <th style="color: red">使用元为单位 可以精确到每厘比如122.122</th>
        </tr>
    </table>
</form>
<table>
    <tr>
        <th>日期</th>
        <th>当日本金</th>
        <th>当日收益</th>
        <th>日万份收益</th>
        <th>日年化收益</th>
        <th>7日年化收益</th>
        <th>修改</th>
    </tr>
    <?php foreach ($shouyi as $key => $val) { ?>
        <tr>
            <td><?=date("Y-m-d",$val->c_date)?></td>
            <td><?=$val->benjin?>元</td>
            <td><?=$val->shouyi?>元</td>
            <td><?=($val->shouyi/$val->benjin)*10000?>元</td>
            <td><?=($val->shouyi*360/$val->benjin)*100?>%</td>
            <td>空</td>
            <td><a href="<?=$this->createUrl('site/index',array('id'=>$val->id))?>">删除</a>
            </td>
        </tr>
    <?php } ?>
</table>
