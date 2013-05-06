<?php
/* @var $this PlayerItemsController */
/* @var $model PlayerItems */

$this->breadcrumbs=array(
	'Player Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PlayerItems', 'url'=>array('index')),
	array('label'=>'Create PlayerItems', 'url'=>array('create')),
	array('label'=>'View PlayerItems', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PlayerItems', 'url'=>array('admin')),
);
?>

<h1>Update PlayerItems <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>