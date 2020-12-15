<?php
/* @var $this PagoclienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pagos de Clientes',
);

$this->menu=array(
	array('label'=>'Crear Pago de Cliente', 'url'=>array('create')),
	array('label'=>'Gestionar Pagos de Clientes', 'url'=>array('admin')),
);
?>

<h1>Pagos de Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
