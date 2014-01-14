<?php
/* @var $this ShouyiController */
/* @var $model Shouyi */

$this->breadcrumbs=array(
	'Shouyis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Shouyi', 'url'=>array('index')),
	array('label'=>'Create Shouyi', 'url'=>array('create')),
	array('label'=>'View Shouyi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Shouyi', 'url'=>array('admin')),
);
?>

<h1>Update Shouyi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>