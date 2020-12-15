<?php
/* @var $this Forma_pagoController */
/* @var $model Forma_pago */

$this->breadcrumbs=array(
	'Forma Pagos'=>array('index'),
	$model->forma_pago_id,
);

$this->menu=array(
	array('label'=>'List Forma_pago', 'url'=>array('index')),
	array('label'=>'Create Forma_pago', 'url'=>array('create')),
	array('label'=>'Update Forma_pago', 'url'=>array('update', 'id'=>$model->forma_pago_id)),
	array('label'=>'Delete Forma_pago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->forma_pago_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Forma_pago', 'url'=>array('admin')),
);
?>

<h1>View Forma_pago #<?php echo $model->forma_pago_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'forma_pago_id',
		'forma_pago',
	),
)); ?>
