<?php
/* @var $this AssetAllocationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asset Allocations',
);

$this->menu=array(
	array('label'=>'Create AssetAllocation', 'url'=>array('create')),
	array('label'=>'Manage AssetAllocation', 'url'=>array('admin')),
);
?>

<h1>Asset Allocations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
