<?php
/* @var $this ShouyiController */
/* @var $model Shouyi */

$this->breadcrumbs=array(
	'Shouyis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Shouyi', 'url'=>array('index')),
	array('label'=>'Manage Shouyi', 'url'=>array('admin')),
);
?>

<h1>Create Shouyi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>