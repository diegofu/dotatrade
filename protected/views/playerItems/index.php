<?php
/* @var $this PlayerItemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Player Items',
);

$this->menu=array(
	array('label'=>'Create PlayerItems', 'url'=>array('create')),
	array('label'=>'Manage PlayerItems', 'url'=>array('admin')),
);
?>

<h1>Player Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
