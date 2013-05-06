<?php
/* @var $this ColorsController */
/* @var $model Colors */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'colors-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color_name'); ?>
		<?php echo $form->textField($model,'color_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'color_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hex_color'); ?>
		<?php echo $form->textField($model,'hex_color',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'hex_color'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->