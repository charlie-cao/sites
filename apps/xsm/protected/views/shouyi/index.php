<?php
/* @var $this ShouyiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Shouyis',
);

$this->menu=array(
	array('label'=>'Create Shouyi', 'url'=>array('create')),
	array('label'=>'Manage Shouyi', 'url'=>array('admin')),
);
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
