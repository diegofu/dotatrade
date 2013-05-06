<?php
/* @var $this PrefabsController */
/* @var $model Prefabs */

$this->breadcrumbs=array(
	'Prefabs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Prefabs', 'url'=>array('index')),
	array('label'=>'Create Prefabs', 'url'=>array('create')),
	array('label'=>'Update Prefabs', 'url'=>array('update', 'id'=>$model->name)),
	array('label'=>'Delete Prefabs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->name),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prefabs', 'url'=>array('admin')),
);
?>

<h1>View Prefabs #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'item_class',
		'item_type_name',
		'item_slot',
		'item_rarity',
		'min_ilevel',
		'max_ilevel',
		'item_set',
	),
)); ?>
