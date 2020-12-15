<?php
/* @var $this CorrelativosController */
/* @var $model Correlativos */

$this->breadcrumbs=array(
	'Correlativoses'=>array('index'),
	$model->empresa_id,
);

$this->menu=array(
	array('label'=>'Listar Correlativos', 'url'=>array('index')),
	array('label'=>'Crear Correlativos (Solo Empresas Nuevas)', 'url'=>array('create')),
	array('label'=>'Actualizar Correlativos Empresa Actual', 'url'=>array('update', 'id'=>$model->empresa_id)),
	array('label'=>'Eliminar Correlativos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->empresa_id),'confirm'=>'Seguro de Eliminar estos Correlativos?')),
	array('label'=>'Gestionar Correlativos', 'url'=>array('admin')),
);
?>

<h1>Ver Correlativos #<?php echo $model->empresa_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'tipoentrada_1',
		'tipoentrada_2',
		'tipoentrada_3',
		'tiposalida_10',
		'tiposalida_11',		
		'tiposalida_12',
		'tiposalida_13',
	),
)); ?>
