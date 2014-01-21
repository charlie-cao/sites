<?php
/* @var $this AssetAllocationController */
/* @var $model AssetAllocation */

$this->breadcrumbs=array(
	'Asset Allocations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AssetAllocation', 'url'=>array('index')),
	array('label'=>'Create AssetAllocation', 'url'=>array('create')),
	array('label'=>'View AssetAllocation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AssetAllocation', 'url'=>array('admin')),
);
?>

<h1>Update AssetAllocation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>