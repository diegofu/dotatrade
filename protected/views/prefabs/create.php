<?php
/* @var $this PrefabsController */
/* @var $model Prefabs */

$this->breadcrumbs=array(
	'Prefabs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Prefabs', 'url'=>array('index')),
	array('label'=>'Manage Prefabs', 'url'=>array('admin')),
);
?>

<h1>Create Prefabs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>