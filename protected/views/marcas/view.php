<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->marca_id,
);

$this->menu=array(
	array('label'=>'Listar Marcas', 'url'=>array('index')),
	array('label'=>'Crear Marca', 'url'=>array('create')),
	array('label'=>'Actulizar Marca', 'url'=>array('update', 'id'=>$model->marca_id)),
	array('label'=>'Eliminar Marca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->marca_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestiona Marcas', 'url'=>array('admin')),
);
?>

<h1>Ver Marca #<?php echo $model->marca_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'marca_id',
		'marca',
	),
)); ?>
