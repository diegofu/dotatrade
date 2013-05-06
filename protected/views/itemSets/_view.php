<?php
/* @var $this ItemSetsController */
/* @var $data ItemSets */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_set')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->item_set), array('view', 'id'=>$data->item_set)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_bundle')); ?>:</b>
	<?php echo CHtml::encode($data->store_bundle); ?>
	<br />


</div>