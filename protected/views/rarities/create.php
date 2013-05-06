<?php
/* @var $this RaritiesController */
/* @var $model Rarities */

$this->breadcrumbs=array(
	'Rarities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rarities', 'url'=>array('index')),
	array('label'=>'Manage Rarities', 'url'=>array('admin')),
);
?>

<h1>Create Rarities</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>