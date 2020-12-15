<?php
/* @var $this PagoclienteController */
/* @var $model Pagocliente */

$this->breadcrumbs=array(
	'Pagos de Clientes'=>array('index'),
	$model->pagocli_id=>array('view','id'=>$model->pagocli_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Pagos de Clientes', 'url'=>array('index')),
	array('label'=>'Crear Pago de Cliente', 'url'=>array('create')),
	array('label'=>'Ver Pago de Cliente', 'url'=>array('view', 'id'=>$model->pagocli_id)),
	array('label'=>'Gestionar Pagos de Clientes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Pago de Cliente <?php echo $model->pagocli_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>