<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->empresa_id,
);

$this->menu=array(
	array('label'=>'Listar Empresas', 'url'=>array('index')),
	array('label'=>'Crear Empresa', 'url'=>array('create')),
	array('label'=>'Actualizar Empresa', 'url'=>array('update', 'id'=>$model->empresa_id)),
	array('label'=>'Eliminar Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->empresa_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Empresas', 'url'=>array('admin')),
);
?>

<h1>Ver Empresa #<?php echo $model->empresa_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'nombre',
		'rif',
		'direccion',
		'representante',
		'mes_inicio',
		'anio_fiscal',
		'iva',
	),
)); ?>
