<?php
/* @var $this LineasController */
/* @var $model Lineas */

$this->breadcrumbs=array(
	'Lineas de Inventario'=>array('index'),
	$model->linea_id,
);

$this->menu=array(
	array('label'=>'Listar Lineas', 'url'=>array('index')),
	array('label'=>'Crear Linea', 'url'=>array('create')),
	array('label'=>'Actualizar Lineas', 'url'=>array('update', 'id'=>$model->linea_id)),
	array('label'=>'Eliminar Linea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->linea_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Lineas', 'url'=>array('admin')),
);
?>

<h1>Ver Linea #<?php echo $model->linea_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'linea_id',
		'linea',
	),
)); ?>
