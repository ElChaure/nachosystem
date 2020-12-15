<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Productos', 'url'=>array('index')),
	array('label'=>'Gestionar Productos', 'url'=>array('admin')),
);
?>

<h1>Crear Producto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>