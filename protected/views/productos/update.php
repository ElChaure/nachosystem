<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->producto_id=>array('view','id'=>$model->producto_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Productos', 'url'=>array('index')),
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Ver Producto', 'url'=>array('view', 'id'=>$model->producto_id)),
	array('label'=>'Gestionar Productos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Producto <?php echo $model->producto_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>