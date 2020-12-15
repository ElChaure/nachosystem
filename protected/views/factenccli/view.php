<?php
/* @var $this FactenccliController */
/* @var $model Factenccli */

$this->breadcrumbs=array(
	'Factencclis'=>array('index'),
	$model->factura_id,
);

$this->menu=array(
	array('label'=>'List Factenccli', 'url'=>array('index')),
	array('label'=>'Create Factenccli', 'url'=>array('create')),
	array('label'=>'Update Factenccli', 'url'=>array('update', 'id'=>$model->factura_id)),
	array('label'=>'Delete Factenccli', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->factura_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Factenccli', 'url'=>array('admin')),
);
?>

<h1>View Factenccli #<?php echo $model->factura_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'factura_id',
		'cliente_id',
		'direccion',
		'vendedor_id',
		'condcredito_id',
		'fecha_emision',
		'fecha_pago',
		'bultos',
		'unidades',
		'docenas',
		'observaciones',
	),
)); ?>
