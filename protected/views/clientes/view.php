<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cliente_id,
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Cliente', 'url'=>array('update', 'id'=>$model->cliente_id)),
	array('label'=>'Elimina Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cliente_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestiona Clientes', 'url'=>array('admin')),
	array('label'=>'Estado de Cuenta', 'url'=>array('edoctacliente', 'id'=>$model->cliente_id), 'linkOptions' => array('target'=>'_blank')),
);
?>

<h1>Ver Cliente #<?php echo $model->cliente_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa.nombre',
		'cliente_id',
		'descripcion',
		'rif',
		'direccion',
		'telefono',
		'fax',
		'contacto',
		'ult_venta',
		'condcredito.condicion',
		'credito_limite',
	),
)); ?>
