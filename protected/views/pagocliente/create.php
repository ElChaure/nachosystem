<?php
/* @var $this PagoclienteController */
/* @var $model Pagocliente */

$this->breadcrumbs=array(
	'Pagos de Clientes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Pagos de Clientes', 'url'=>array('index')),
	array('label'=>'Gestionar Pagos de Clientes', 'url'=>array('admin')),
);
?>

<h1>Crear Pago de Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>