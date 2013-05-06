<?php
/* @var $this PrefabsController */
/* @var $model Prefabs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_class'); ?>
		<?php echo $form->textField($model,'item_class',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_type_name'); ?>
		<?php echo $form->textField($model,'item_type_name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_slot'); ?>
		<?php echo $form->textField($model,'item_slot',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_rarity'); ?>
		<?php echo $form->textField($model,'item_rarity',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_ilevel'); ?>
		<?php echo $form->textField($model,'min_ilevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_ilevel'); ?>
		<?php echo $form->textField($model,'max_ilevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_set'); ?>
		<?php echo $form->textField($model,'item_set',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->