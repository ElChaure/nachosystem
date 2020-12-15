<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cliente_id=>array('view','id'=>$model->cliente_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Ver Cliente', 'url'=>array('view', 'id'=>$model->cliente_id)),
	array('label'=>'Gestiona Clientes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cliente <?php echo $model->cliente_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>