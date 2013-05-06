<?php
/* @var $this PlayerItemsController */
/* @var $model PlayerItems */

$this->breadcrumbs=array(
	'Player Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PlayerItems', 'url'=>array('index')),
	array('label'=>'Create PlayerItems', 'url'=>array('create')),
	array('label'=>'Update PlayerItems', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PlayerItems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PlayerItems', 'url'=>array('admin')),
);
?>

<h1>View PlayerItems #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'player_id',
		'original_id',
		'defindex',
		'level',
		'quality',
		'inventory',
		'quantity',
		'equipped',
	),
)); ?>
