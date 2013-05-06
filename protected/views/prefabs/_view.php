<?php
/* @var $this PrefabsController */
/* @var $data Prefabs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->name)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_class')); ?>:</b>
	<?php echo CHtml::encode($data->item_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_type_name')); ?>:</b>
	<?php echo CHtml::encode($data->item_type_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_slot')); ?>:</b>
	<?php echo CHtml::encode($data->item_slot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_rarity')); ?>:</b>
	<?php echo CHtml::encode($data->item_rarity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_ilevel')); ?>:</b>
	<?php echo CHtml::encode($data->min_ilevel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_ilevel')); ?>:</b>
	<?php echo CHtml::encode($data->max_ilevel); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('item_set')); ?>:</b>
	<?php echo CHtml::encode($data->item_set); ?>
	<br />

	*/ ?>

</div>