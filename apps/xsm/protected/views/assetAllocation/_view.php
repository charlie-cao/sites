<?php
/* @var $this AssetAllocationController */
/* @var $data AssetAllocation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classification')); ?>:</b>
	<?php echo CHtml::encode($data->classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classification_detail')); ?>:</b>
	<?php echo CHtml::encode($data->classification_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asset_value')); ?>:</b>
	<?php echo CHtml::encode($data->asset_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memo')); ?>:</b>
	<?php echo CHtml::encode($data->memo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_time')); ?>:</b>
	<?php echo CHtml::encode($data->c_time); ?>
	<br />


</div>