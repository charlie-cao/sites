<?php
/* @var $this AssetAllocationController */
/* @var $model AssetAllocation */

$this->breadcrumbs=array(
	'Asset Allocations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AssetAllocation', 'url'=>array('index')),
	array('label'=>'Create AssetAllocation', 'url'=>array('create')),
	array('label'=>'Update AssetAllocation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AssetAllocation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AssetAllocation', 'url'=>array('admin')),
);
?>

<h1>View AssetAllocation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uid',
		'classification',
		'classification_detail',
		'asset_value',
		'memo',
		'c_time',
	),
)); ?>
