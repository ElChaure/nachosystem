<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Gestiona Clientes', 'url'=>array('admin')),
);
?>

<h1>Crear Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>