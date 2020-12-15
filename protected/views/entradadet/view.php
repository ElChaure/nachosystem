<?php
/* @var $this EntradadetController */
/* @var $model Entradadet */

$this->breadcrumbs=array(
	'Entradadets'=>array('index'),
	$model->entradadet_id,
);

$this->menu=array(
	array('label'=>'List Entradadet', 'url'=>array('index')),
	array('label'=>'Create Entradadet', 'url'=>array('create')),
	array('label'=>'Update Entradadet', 'url'=>array('update', 'id'=>$model->entradadet_id)),
	array('label'=>'Delete Entradadet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->entradadet_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entradadet', 'url'=>array('admin')),
);
?>

<h1>View Entradadet #<?php echo $model->entradadet_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'entradadet_id',
		'entradaenc_id',
		'producto_id',
		'unidad_id',
		'cantidad',
		'precio_unitario',
		'iva',
		'total_neto',
		'total_final',
	),
)); ?>
