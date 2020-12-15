<?php
/* @var $this SalidadetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salidadets',
);

$this->menu=array(
	array('label'=>'Create Salidadet', 'url'=>array('create')),
	array('label'=>'Manage Salidadet', 'url'=>array('admin')),
);
?>

<h1>Salidadets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
