<?php
/* @var $this RaritiesController */
/* @var $model Rarities */

$this->breadcrumbs=array(
	'Rarities'=>array('index'),
	$model->rarity=>array('view','id'=>$model->rarity),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rarities', 'url'=>array('index')),
	array('label'=>'Create Rarities', 'url'=>array('create')),
	array('label'=>'View Rarities', 'url'=>array('view', 'id'=>$model->rarity)),
	array('label'=>'Manage Rarities', 'url'=>array('admin')),
);
?>

<h1>Update Rarities <?php echo $model->rarity; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>