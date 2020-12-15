<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->proveedor_id=>array('view','id'=>$model->proveedor_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedor', 'url'=>array('create')),
	array('label'=>'Ver Proveedor', 'url'=>array('view', 'id'=>$model->proveedor_id)),
	array('label'=>'Gestionar Proveedores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Proveedor <?php echo $model->proveedor_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>