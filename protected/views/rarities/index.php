<?php
/* @var $this RaritiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rarities',
);

$this->menu=array(
	array('label'=>'Create Rarities', 'url'=>array('create')),
	array('label'=>'Manage Rarities', 'url'=>array('admin')),
);
?>

<h1>Rarities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
