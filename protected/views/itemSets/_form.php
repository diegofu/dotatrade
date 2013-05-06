<?php
/* @var $this ItemSetsController */
/* @var $model ItemSets */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-sets-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_set'); ?>
		<?php echo $form->textField($model,'item_set',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'item_set'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'store_bundle'); ?>
		<?php echo $form->textField($model,'store_bundle',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'store_bundle'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->