<?php
/* @var $this PlayersController */
/* @var $model Players */
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
		<?php echo $form->label($model,'communityvisibilitystate'); ?>
		<?php echo $form->textField($model,'communityvisibilitystate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profilestate'); ?>
		<?php echo $form->textField($model,'profilestate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personaname'); ?>
		<?php echo $form->textField($model,'personaname',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastlogoff'); ?>
		<?php echo $form->textField($model,'lastlogoff'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profileurl'); ?>
		<?php echo $form->textField($model,'profileurl',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avatarmedium'); ?>
		<?php echo $form->textField($model,'avatarmedium',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avatarfull'); ?>
		<?php echo $form->textField($model,'avatarfull',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personastate'); ?>
		<?php echo $form->textField($model,'personastate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primaryclanid'); ?>
		<?php echo $form->textField($model,'primaryclanid',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timecreated'); ?>
		<?php echo $form->textField($model,'timecreated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->