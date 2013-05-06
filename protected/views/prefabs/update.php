<?php
/* @var $this PrefabsController */
/* @var $model Prefabs */

$this->breadcrumbs=array(
	'Prefabs'=>array('index'),
	$model->name=>array('view','id'=>$model->name),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prefabs', 'url'=>array('index')),
	array('label'=>'Create Prefabs', 'url'=>array('create')),
	array('label'=>'View Prefabs', 'url'=>array('view', 'id'=>$model->name)),
	array('label'=>'Manage Prefabs', 'url'=>array('admin')),
);
?>

<h1>Update Prefabs <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>