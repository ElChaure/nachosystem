<?php
/* @var $this LineasController */
/* @var $model Lineas */

$this->breadcrumbs=array(
	'Lineas de Inventario'=>array('index'),
	$model->linea_id=>array('view','id'=>$model->linea_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Lineas', 'url'=>array('index')),
	array('label'=>'Crear Linea', 'url'=>array('create')),
	array('label'=>'Ver Linea', 'url'=>array('view', 'id'=>$model->linea_id)),
	array('label'=>'Gestionar Lineas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Linea <?php echo $model->linea_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>