<?php
/* @var $this LineasController */
/* @var $model Lineas */

$this->breadcrumbs=array(
	'Lineas de Inventario'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Lineas', 'url'=>array('index')),
	array('label'=>'Gestionar Lineas', 'url'=>array('admin')),
);
?>

<h1>Crear Linea</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>