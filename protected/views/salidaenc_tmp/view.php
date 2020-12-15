<?php
/* @var $this Salidaenc_tmpController */
/* @var $model Salidaenc_tmp */

$this->breadcrumbs=array(
	'Salidaenc Tmps'=>array('index'),
	$model->salidaenc_id,
);

$this->menu=array(
	array('label'=>'List Salidaenc_tmp', 'url'=>array('index')),
	array('label'=>'Create Salidaenc_tmp', 'url'=>array('create')),
	array('label'=>'Update Salidaenc_tmp', 'url'=>array('update', 'id'=>$model->salidaenc_id)),
	array('label'=>'Delete Salidaenc_tmp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salidaenc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salidaenc_tmp', 'url'=>array('admin')),
);
?>

<h1>View Salidaenc_tmp #<?php echo $model->salidaenc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'salidaenc_id',
		'tiposalida_id',
		'cliente_id',
		'fecha',
		'condcredito_id',
		'vendedor_id',
		'bultos',
		'unidades',
		'docenas',
	),
)); ?>
