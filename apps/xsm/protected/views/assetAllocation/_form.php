<?php
/* @var $this AssetAllocationController */
/* @var $model AssetAllocation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asset-allocation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid'); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classification'); ?>
		<?php echo $form->textArea($model,'classification',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'classification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classification_detail'); ?>
		<?php echo $form->textArea($model,'classification_detail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'classification_detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asset_value'); ?>
		<?php echo $form->textField($model,'asset_value'); ?>
		<?php echo $form->error($model,'asset_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memo'); ?>
		<?php echo $form->textArea($model,'memo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'memo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c_time'); ?>
		<?php echo $form->textField($model,'c_time'); ?>
		<?php echo $form->error($model,'c_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->