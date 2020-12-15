<?php
/* @var $this SalidaencController */
/* @var $model Salidaenc */

$this->breadcrumbs=array(
	'Salidas de Inventario'=>array('index'),
	$model->movimiento_id=>array('view','id'=>$model->movimiento_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salidaenc', 'url'=>array('index')),
	array('label'=>'Create Salidaenc', 'url'=>array('create')),
	array('label'=>'View Salidaenc', 'url'=>array('view', 'id'=>$model->movimiento_id)),
	array('label'=>'Manage Salidaenc', 'url'=>array('admin')),
);
?>

<h1>Update Salidaenc <?php echo $model->movimiento_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>