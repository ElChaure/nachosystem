<?php
/* @var $this FactdetclliController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Factdetcllis',
);

$this->menu=array(
	array('label'=>'Create Factdetclli', 'url'=>array('create')),
	array('label'=>'Manage Factdetclli', 'url'=>array('admin')),
);
?>

<h1>Factdetcllis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
