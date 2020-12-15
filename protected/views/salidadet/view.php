<?php
/* @var $this SalidadetController */
/* @var $model Salidadet */

$this->breadcrumbs=array(
	'Salidadets'=>array('index'),
	$model->salidadet_id,
);

$this->menu=array(
	array('label'=>'List Salidadet', 'url'=>array('index')),
	array('label'=>'Create Salidadet', 'url'=>array('create')),
	array('label'=>'Update Salidadet', 'url'=>array('update', 'id'=>$model->salidadet_id)),
	array('label'=>'Delete Salidadet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salidadet_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salidadet', 'url'=>array('admin')),
);
?>

<h1>View Salidadet #<?php echo $model->salidadet_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'salidadet_id',
		'salidaenc_id',
		'producto_id',
		'unidad_id',
		'cantidad',
		'precio_unitario',
		'iva',
		'total_neto',
		'total_final',
	),
)); ?>
