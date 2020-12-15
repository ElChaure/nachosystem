<?php
/* @var $this Salidadet_tmpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Renglones de Salida de Inventario',
);

$this->menu=array(
	array('label'=>'Create Salidadet_tmp', 'url'=>array('create')),
	array('label'=>'Manage Salidadet_tmp', 'url'=>array('admin')),
);
?>

<h1>Renglones de Salida de Inventario</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
