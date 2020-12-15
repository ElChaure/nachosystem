<?php
/* @var $this Salidadet_tmpController */
/* @var $model Salidadet_tmp */

$this->breadcrumbs=array(
	'Renglones de Salida de Inventario'=>array('index'),
	$model->salidadet_id,
);

$this->menu=array(
	array('label'=>'List Salidadet_tmp', 'url'=>array('index')),
	array('label'=>'Create Salidadet_tmp', 'url'=>array('create')),
	array('label'=>'Update Salidadet_tmp', 'url'=>array('update', 'id'=>$model->salidadet_id)),
	array('label'=>'Delete Salidadet_tmp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salidadet_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salidadet_tmp', 'url'=>array('admin')),
);
?>

<h1>View Salidadet_tmp #<?php echo $model->salidadet_id; ?></h1>

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
