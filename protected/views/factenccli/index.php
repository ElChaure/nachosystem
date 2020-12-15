<?php
/* @var $this FactenccliController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Factencclis',
);

$this->menu=array(
	array('label'=>'Create Factenccli', 'url'=>array('create')),
	array('label'=>'Manage Factenccli', 'url'=>array('admin')),
);
?>

<h1>Factencclis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
