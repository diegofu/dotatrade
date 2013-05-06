<?php
/* @var $this PlayerItemsController */
/* @var $model PlayerItems */

$this->breadcrumbs=array(
	'Player Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PlayerItems', 'url'=>array('index')),
	array('label'=>'Manage PlayerItems', 'url'=>array('admin')),
);
?>

<h1>Create PlayerItems</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>