<?php
/* @var $this PagoclienteController */
/* @var $model Pagocliente */

$this->breadcrumbs=array(
	'Pagos de Clientes'=>array('index'),
	$model->pagocli_id,
);

$this->menu=array(
	array('label'=>'Listar Pagos de Clientes', 'url'=>array('index')),
	array('label'=>'Crear Pago de Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Pago de Cliente', 'url'=>array('update', 'id'=>$model->pagocli_id)),
	array('label'=>'Eliminar Pago de Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pagocli_id),'confirm'=>'Confirma la Eliminacion de este Pago?')),
	array('label'=>'Gestionar Pagos de Clientes', 'url'=>array('admin')),
);
?>

<h1>Ver Pago de Cliente #<?php echo $model->pagocli_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'pagocli_id',
		'cliente_id',
		'forma_pago_id',
		'movimiento_id',
		'documento_nro',
		'fecha_pago',
		'monto',
	),
)); ?>
