<?php
/* @var $this ItemSetsController */
/* @var $model ItemSets */

$this->breadcrumbs=array(
	'Item Sets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ItemSets', 'url'=>array('index')),
	array('label'=>'Create ItemSets', 'url'=>array('create')),
	array('label'=>'Update ItemSets', 'url'=>array('update', 'id'=>$model->item_set)),
	array('label'=>'Delete ItemSets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->item_set),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemSets', 'url'=>array('admin')),
);
?>

<h1>View ItemSets #<?php echo $model->item_set; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'item_set',
		'name',
		'store_bundle',
	),
)); ?>
