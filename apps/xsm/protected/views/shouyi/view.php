<?php
/* @var $this ShouyiController */
/* @var $model Shouyi */

$this->breadcrumbs=array(
	'Shouyis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Shouyi', 'url'=>array('index')),
	array('label'=>'Create Shouyi', 'url'=>array('create')),
	array('label'=>'Update Shouyi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Shouyi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Shouyi', 'url'=>array('admin')),
);
?>

<h1>View Shouyi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'benjin',
		'shouyi',
		'c_date',
	),
)); ?>
