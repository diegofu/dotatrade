<?php
/* @var $this PrefabsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prefabs',
);

$this->menu=array(
	array('label'=>'Create Prefabs', 'url'=>array('create')),
	array('label'=>'Manage Prefabs', 'url'=>array('admin')),
);
?>

<h1>Prefabs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
