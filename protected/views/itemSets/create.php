<?php
/* @var $this ItemSetsController */
/* @var $model ItemSets */

$this->breadcrumbs=array(
	'Item Sets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ItemSets', 'url'=>array('index')),
	array('label'=>'Manage ItemSets', 'url'=>array('admin')),
);
?>

<h1>Create ItemSets</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>