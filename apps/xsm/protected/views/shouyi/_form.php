<?php
/* @var $this ShouyiController */
/* @var $model Shouyi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shouyi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'benjin'); ?>
		<?php echo $form->textField($model,'benjin'); ?>
		<?php echo $form->error($model,'benjin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shouyi'); ?>
		<?php echo $form->textField($model,'shouyi'); ?>
		<?php echo $form->error($model,'shouyi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c_date'); ?>
		<?php echo $form->textField($model,'c_date'); ?>
		<?php echo $form->error($model,'c_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->