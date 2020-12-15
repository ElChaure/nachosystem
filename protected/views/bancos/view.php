<?php
/* @var $this BancosController */
/* @var $model Bancos */

$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	$model->banco_id,
);

$this->menu=array(
	array('label'=>'Listar Bancos', 'url'=>array('index')),
	array('label'=>'Crear Banco', 'url'=>array('create')),
	array('label'=>'Actualizar Banco', 'url'=>array('update', 'id'=>$model->banco_id)),
	array('label'=>'Eliminar Banco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->banco_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestiona Bancos', 'url'=>array('admin')),
);
?>

<h1>Ver Banco #<?php echo $model->banco_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa.nombre',
		'banco_id',
		'nombre',
		'nro_cuenta',
		'agencia',
		'telefono',
		'contacto',
		'estado.descripcion',
	),
)); ?>
