<?php
/* @var $this ShouyiController */
/* @var $model Shouyi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'benjin'); ?>
		<?php echo $form->textField($model,'benjin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shouyi'); ?>
		<?php echo $form->textField($model,'shouyi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_date'); ?>
		<?php echo $form->textField($model,'c_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->