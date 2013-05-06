<?php
/* @var $this PlayersController */
/* @var $model Players */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'players-form',
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
		<?php echo $form->labelEx($model,'communityvisibilitystate'); ?>
		<?php echo $form->textField($model,'communityvisibilitystate'); ?>
		<?php echo $form->error($model,'communityvisibilitystate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profilestate'); ?>
		<?php echo $form->textField($model,'profilestate'); ?>
		<?php echo $form->error($model,'profilestate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personaname'); ?>
		<?php echo $form->textField($model,'personaname',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'personaname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastlogoff'); ?>
		<?php echo $form->textField($model,'lastlogoff'); ?>
		<?php echo $form->error($model,'lastlogoff'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profileurl'); ?>
		<?php echo $form->textField($model,'profileurl',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'profileurl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatarmedium'); ?>
		<?php echo $form->textField($model,'avatarmedium',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'avatarmedium'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatarfull'); ?>
		<?php echo $form->textField($model,'avatarfull',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'avatarfull'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personastate'); ?>
		<?php echo $form->textField($model,'personastate'); ?>
		<?php echo $form->error($model,'personastate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primaryclanid'); ?>
		<?php echo $form->textField($model,'primaryclanid',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'primaryclanid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timecreated'); ?>
		<?php echo $form->textField($model,'timecreated'); ?>
		<?php echo $form->error($model,'timecreated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->