<?php
/* @var $this PlayerItemsController */
/* @var $model PlayerItems */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'player-items-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'player_id'); ?>
		<?php echo $form->textField($model,'player_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'player_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'original_id'); ?>
		<?php echo $form->textField($model,'original_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'original_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'defindex'); ?>
		<?php echo $form->textField($model,'defindex'); ?>
		<?php echo $form->error($model,'defindex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textField($model,'level'); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quality'); ?>
		<?php echo $form->textField($model,'quality'); ?>
		<?php echo $form->error($model,'quality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inventory'); ?>
		<?php echo $form->textField($model,'inventory',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'inventory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'equipped'); ?>
		<?php echo $form->textField($model,'equipped'); ?>
		<?php echo $form->error($model,'equipped'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->