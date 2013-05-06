<?php
/* @var $this ItemsController */
/* @var $data Items */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prefab')); ?>:</b>
	<?php echo CHtml::encode($data->prefab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_type_name')); ?>:</b>
	<?php echo CHtml::encode($data->item_type_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_name')); ?>:</b>
	<?php echo CHtml::encode($data->item_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_slot')); ?>:</b>
	<?php echo CHtml::encode($data->item_slot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_rarity')); ?>:</b>
	<?php echo CHtml::encode($data->item_rarity); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('item_description')); ?>:</b>
	<?php echo CHtml::encode($data->item_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_set')); ?>:</b>
	<?php echo CHtml::encode($data->item_set); ?>
	<br />

	*/ ?>

</div>