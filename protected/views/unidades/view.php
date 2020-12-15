<?php
/* @var $this UnidadesController */
/* @var $model Unidades */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	$model->unidad_id,
);

$this->menu=array(
	array('label'=>'Listar Unidades', 'url'=>array('index')),
	array('label'=>'Crear Unidad', 'url'=>array('create')),
	array('label'=>'Actualizar Unidad', 'url'=>array('update', 'id'=>$model->unidad_id)),
	array('label'=>'Eliminar Unidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->unidad_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Unidades', 'url'=>array('admin')),
);
?>

<h1>Ver Unidad #<?php echo $model->unidad_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'unidad_id',
		'unidad',
	),
)); ?>
