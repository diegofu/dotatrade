<?php
/* @var $this ItemsController */
/* @var $model Items */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prefab'); ?>
		<?php echo $form->textField($model,'prefab',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'prefab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_type_name'); ?>
		<?php echo $form->textField($model,'item_type_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'item_type_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_name'); ?>
		<?php echo $form->textField($model,'item_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'item_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_slot'); ?>
		<?php echo $form->textField($model,'item_slot',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'item_slot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_rarity'); ?>
		<?php echo $form->textField($model,'item_rarity',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'item_rarity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_description'); ?>
		<?php echo $form->textField($model,'item_description',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'item_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_set'); ?>
		<?php echo $form->textField($model,'item_set',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'item_set'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->