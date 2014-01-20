<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<table>
    <tr>
        <th>每日收益</th>
        <!--th>进出帐</th-->
        <th>资产配比</th>
    </tr>
    <tr>
    <form action="<?= $this->createUrl('site/index') ?>" method="post">
        <td>
            记录日期<input id="c_date" name="c_date" type="text" value="<?= date("Y-m-d") ?>"/>
            <br/>当前资产<input id="benjin" name="benjin" type="text" value="<?= $day_benjin ?>"/>元
            <br/>进出账<input id="shouyi" name="shouyi" type="text" value="1"/>元
            <br/><input id="jisuan" type="submit" value="保存"/>
            <br/>使用元为单位 可以精确到每厘比如122.122
        </td>
    </form>
    <!--form action="<?= $this->createUrl('site/jinchuzhang') ?>" method="post">
        <td>
            进出帐<input id="shouyi" name="shouyi" type="text" value=""/>元
            <br/>类型： 存款 基金 债券 外汇 自定义
            <br/>备注<input id="shouyi" name="shouyi" type="text" value=""/>
            <br/><input id="jisuan" type="submit" value="保存"/>
        </td>
    </form-->
    <td>
        股票:11111
        <br/>债券:11111
        <br/>逆回购:3333
        <br/>基金:2222
    </td>
</tr>

</table>


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
            <td><?= date("Y-m-d", $val->c_date) ?></td>
            <td><?= $val->benjin ?>元</td>
            <td><?= $val->shouyi ?>元</td>
            <td><?= ($val->shouyi / $val->benjin) * 10000 ?>元</td>
            <td><?= ($val->shouyi * 360 / $val->benjin) * 100 ?>%</td>
            <td><?= ($val->shouyi * 360 / $val->benjin) * 100 ?>%</td>
            <td><a href="<?= $this->createUrl('site/index', array('id' => $val->id)) ?>">删除</a>
            </td>
        </tr>
    <?php } ?>
</table>

<pre>
资产收益平衡表 使用说明：
1.初始化：将所有的款项汇总，记个总数下来。使用进账录入
2.日常操作：
  1 推荐每日进行收益汇总，将收益汇总，计入收益项目。
  2 进账: 发工资 或者其他进账时候   计入正值
  3 出账：每次银行取款，以及信用卡还款时    计入负值
3 记错了的时候，将数据项标记为删除，重新记账。
4 如能养成习惯每日记录，将清晰的表现出您的资产的盈利能力。
没了。
</pre>
