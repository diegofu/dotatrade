<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class ="row">
	<div class="span8">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span4 last">
		<div id="sidebar">
		<? if(Yii::app()->user->isAdmin()): ?>
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
</div>
<?php $this->endContent(); ?>