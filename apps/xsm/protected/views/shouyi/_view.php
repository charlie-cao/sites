<?php
/* @var $this ShouyiController */
/* @var $data Shouyi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('benjin')); ?>:</b>
	<?php echo CHtml::encode($data->benjin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shouyi')); ?>:</b>
	<?php echo CHtml::encode($data->shouyi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_date')); ?>:</b>
	<?php echo CHtml::encode($data->c_date); ?>
	<br />


</div>