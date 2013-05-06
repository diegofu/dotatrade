<?php
/* @var $this ItemSetsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Item Sets',
);

$this->menu=array(
	array('label'=>'Create ItemSets', 'url'=>array('create')),
	array('label'=>'Manage ItemSets', 'url'=>array('admin')),
);
?>

<h1>Item Sets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
