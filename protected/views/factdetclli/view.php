<?php
/* @var $this FactdetclliController */
/* @var $model Factdetclli */

$this->breadcrumbs=array(
	'Factdetcllis'=>array('index'),
	$model->factdet_id,
);

$this->menu=array(
	array('label'=>'List Factdetclli', 'url'=>array('index')),
	array('label'=>'Create Factdetclli', 'url'=>array('create')),
	array('label'=>'Update Factdetclli', 'url'=>array('update', 'id'=>$model->factdet_id)),
	array('label'=>'Delete Factdetclli', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->factdet_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Factdetclli', 'url'=>array('admin')),
);
?>

<h1>View Factdetclli #<?php echo $model->factdet_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'factdet_id',
		'factura_id',
		'producto_id',
		'cantidad',
		'unidad_id',
		'precio_venta',
	),
)); ?>
