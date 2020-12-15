<?php
/* @var $this RolesController */
/* @var $model Roles */

$this->breadcrumbs=array(
	'Roles de Usuario'=>array('index'),
	$model->rol_id,
);

$this->menu=array(
	array('label'=>'Listar Roles', 'url'=>array('index')),
	array('label'=>'Crear Rol', 'url'=>array('create')),
	array('label'=>'Actualizar Rol', 'url'=>array('update', 'id'=>$model->rol_id)),
	array('label'=>'Eliminar Rol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rol_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Roles', 'url'=>array('admin')),
);
?>

<h1>Ver Rol #<?php echo $model->rol_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rol_id',
		'rol',
	),
)); ?>
