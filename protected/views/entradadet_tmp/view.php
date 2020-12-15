<?php
/* @var $this Entradadet_tmpController */
/* @var $model Entradadet_tmp */

$this->breadcrumbs=array(
	'Entradadet Tmps'=>array('index'),
	$model->entradadet_id,
);

$this->menu=array(
	array('label'=>'List Entradadet_tmp', 'url'=>array('index')),
	array('label'=>'Create Entradadet_tmp', 'url'=>array('create')),
	array('label'=>'Update Entradadet_tmp', 'url'=>array('update', 'id'=>$model->entradadet_id)),
	array('label'=>'Delete Entradadet_tmp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->entradadet_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entradadet_tmp', 'url'=>array('admin')),
);
?>

<h1>View Entradadet_tmp #<?php echo $model->entradadet_id; ?></h1>

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
