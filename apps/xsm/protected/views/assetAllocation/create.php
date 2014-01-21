<?php
/* @var $this AssetAllocationController */
/* @var $model AssetAllocation */

$this->breadcrumbs=array(
	'Asset Allocations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AssetAllocation', 'url'=>array('index')),
	array('label'=>'Manage AssetAllocation', 'url'=>array('admin')),
);
?>

<h1>Create AssetAllocation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>