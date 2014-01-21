<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 资产配比';
$this->breadcrumbs=array(
	'资产配比',
);
?>
<form>
    类型<input type="text" >
    名称<input type="text" >
    价值<input type="text" >
    
</form>
<b>当前</b>
<b>动态</b>
<pre>
货币基金 现金宝 20
货币基金 余额宝 20
债券     逆回购 20
外汇     澳元   10
贵金属   黄金   10
股票            20
股票基金        20
银行存款    

外债     明明投资     20    备注 开始日期 联系人
外债     天威投资     20
外债     新沂房地产   70
外债     泰恒紫汇     70
外债     其他         50

不动产   阿卡房子    260
         翠湖房子    140

保险   
</pre>  