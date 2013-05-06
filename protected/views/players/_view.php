<?php
/* @var $this PlayersController */
/* @var $data Players */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('communityvisibilitystate')); ?>:</b>
	<?php echo CHtml::encode($data->communityvisibilitystate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profilestate')); ?>:</b>
	<?php echo CHtml::encode($data->profilestate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personaname')); ?>:</b>
	<?php echo CHtml::encode($data->personaname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastlogoff')); ?>:</b>
	<?php echo CHtml::encode($data->lastlogoff); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profileurl')); ?>:</b>
	<?php echo CHtml::encode($data->profileurl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('avatarmedium')); ?>:</b>
	<?php echo CHtml::encode($data->avatarmedium); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatarfull')); ?>:</b>
	<?php echo CHtml::encode($data->avatarfull); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personastate')); ?>:</b>
	<?php echo CHtml::encode($data->personastate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primaryclanid')); ?>:</b>
	<?php echo CHtml::encode($data->primaryclanid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timecreated')); ?>:</b>
	<?php echo CHtml::encode($data->timecreated); ?>
	<br />

	*/ ?>

</div>