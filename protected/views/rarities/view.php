<?php
/* @var $this RaritiesController */
/* @var $model Rarities */

$this->breadcrumbs=array(
	'Rarities'=>array('index'),
	$model->rarity,
);

$this->menu=array(
	array('label'=>'List Rarities', 'url'=>array('index')),
	array('label'=>'Create Rarities', 'url'=>array('create')),
	array('label'=>'Update Rarities', 'url'=>array('update', 'id'=>$model->rarity)),
	array('label'=>'Delete Rarities', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rarity),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rarities', 'url'=>array('admin')),
);
?>

<h1>View Rarities #<?php echo $model->rarity; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rarity',
		'value',
		'loc_key',
		'color',
	),
)); ?>
