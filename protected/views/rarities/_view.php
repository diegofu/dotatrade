<?php
/* @var $this RaritiesController */
/* @var $data Rarities */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rarity')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rarity), array('view', 'id'=>$data->rarity)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loc_key')); ?>:</b>
	<?php echo CHtml::encode($data->loc_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />


</div>