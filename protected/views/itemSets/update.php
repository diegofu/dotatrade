<?php
/* @var $this ItemSetsController */
/* @var $model ItemSets */

$this->breadcrumbs=array(
	'Item Sets'=>array('index'),
	$model->name=>array('view','id'=>$model->item_set),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemSets', 'url'=>array('index')),
	array('label'=>'Create ItemSets', 'url'=>array('create')),
	array('label'=>'View ItemSets', 'url'=>array('view', 'id'=>$model->item_set)),
	array('label'=>'Manage ItemSets', 'url'=>array('admin')),
);
?>

<h1>Update ItemSets <?php echo $model->item_set; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>