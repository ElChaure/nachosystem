<?php
/* @var $this RolesController */
/* @var $model Roles */

$this->breadcrumbs=array(
	'Roles de Usuario'=>array('index'),
	$model->rol_id=>array('view','id'=>$model->rol_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Roles', 'url'=>array('index')),
	array('label'=>'Crear Rol', 'url'=>array('create')),
	array('label'=>'Ver Rol', 'url'=>array('view', 'id'=>$model->rol_id)),
	array('label'=>'Gestionar Roles', 'url'=>array('admin')),
);
?>

<h1>Actualizar Rol <?php echo $model->rol_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>