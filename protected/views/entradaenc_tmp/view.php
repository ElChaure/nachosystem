<?php
/* @var $this Entradaenc_tmpController */
/* @var $model Entradaenc_tmp */

$this->breadcrumbs=array(
	'Entradaenc Tmps'=>array('index'),
	$model->entradaenc_id,
);

$this->menu=array(
	array('label'=>'List Entradaenc_tmp', 'url'=>array('index')),
	array('label'=>'Create Entradaenc_tmp', 'url'=>array('create')),
	array('label'=>'Update Entradaenc_tmp', 'url'=>array('update', 'id'=>$model->entradaenc_id)),
	array('label'=>'Delete Entradaenc_tmp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->entradaenc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entradaenc_tmp', 'url'=>array('admin')),
);
?>

<h1>View Entradaenc_tmp #<?php echo $model->entradaenc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'entradaenc_id',
		'tipoentrada_id',
		'proveedor_id',
		'fecha',
		'condcredito_id',
		'vendedor_id',
		'bultos',
		'unidades',
		'docenas',
	),
)); ?>
