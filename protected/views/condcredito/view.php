<?php
/* @var $this CondcreditoController */
/* @var $model Condcredito */

$this->breadcrumbs=array(
	'Condicion Crediticia'=>array('index'),
	$model->condcredito_id,
);

$this->menu=array(
	array('label'=>'Listar Condicion Crediticia', 'url'=>array('index')),
	array('label'=>'Crear Condicion Crediticia', 'url'=>array('create')),
	array('label'=>'Actualizar Condicion Crediticia', 'url'=>array('update', 'id'=>$model->condcredito_id)),
	array('label'=>'Eliminar Condicion Crediticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->condcredito_id),'confirm'=>'Seguro de Eliminar esta Condicion Crediticia.?')),
	array('label'=>'Gestionar Condicion Crediticia', 'url'=>array('admin')),
);
?>

<h1>Ver Condicion Crediticia #<?php echo $model->condcredito_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'condcredito_id',
		'condicion',
	),
)); ?>
