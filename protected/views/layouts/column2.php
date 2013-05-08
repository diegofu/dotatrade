<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-17">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-7 last">
	<div id="sidebar">
	<? if(!Yii::app()->user->isGuest): ?>
			<? $this->beginWidget('zii.widgets.Cportlet', array(
				'title'=>'Operations',
				)); ?>
			<ul>
				<li><?php echo CHtml::link('Update the Database',array('admin/updateDatabase')); ?></li>
				<li><?php echo CHtml::link('View Items in Database',array('admin/viewItems')); ?></li>
				<li><?php echo CHtml::link('View Heroes in Database',array('admin/viewHeroes')); ?></li>
			</ul>

			<? $this->endWidget(); ?>
		
	<? endif ?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>