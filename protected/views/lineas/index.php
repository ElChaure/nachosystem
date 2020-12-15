<?php
/* @var $this LineasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lineas de Inventario',
);

$this->menu=array(
	array('label'=>'Crear Linea', 'url'=>array('create')),
	array('label'=>'Gestionar Lineas', 'url'=>array('admin')),
);
?>

<h1>Lineas de Inventario</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
