<?php
/* @var $this Forma_pagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Forma Pagos',
);

$this->menu=array(
	array('label'=>'Create Forma_pago', 'url'=>array('create')),
	array('label'=>'Manage Forma_pago', 'url'=>array('admin')),
);
?>

<h1>Forma Pagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
