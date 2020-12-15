<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->proveedor_id,
);

$this->menu=array(
	array('label'=>'Listar Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedor', 'url'=>array('create')),
	array('label'=>'Actualizar Proveedor', 'url'=>array('update', 'id'=>$model->proveedor_id)),
	array('label'=>'Eliminar Proveedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->proveedor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Proveedores', 'url'=>array('admin')),
);
?>

<h1>Ver Proveedor #<?php echo $model->proveedor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'proveedor_id',
		'descripcion',
		'rif',
		'direccion',
		'telefono',
		'fax',
		'contacto',
		'ult_compra',
		'condcredito_id',
		'credito_limite',
	),
)); ?>
