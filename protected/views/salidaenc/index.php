<?php
/* @var $this SalidaencController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salidas de Inventario',
);

$this->menu=array(
	array('label'=>'Gestiona Salidas de inventario Formalizadas', 'url'=>array('admin')),
);
?>

<h1>Salidaencs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
