<?php
/* @var $this ColorsController */
/* @var $model Colors */

$this->breadcrumbs=array(
	'Colors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Colors', 'url'=>array('index')),
	array('label'=>'Create Colors', 'url'=>array('create')),
	array('label'=>'View Colors', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Colors', 'url'=>array('admin')),
);
?>

<h1>Update Colors <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>