<?php
/* @var $this ColorsController */
/* @var $data Colors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color_name')); ?>:</b>
	<?php echo CHtml::encode($data->color_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hex_color')); ?>:</b>
	<?php echo CHtml::encode($data->hex_color); ?>
	<br />


</div>