<?php
/* @var $this EntradaencController */
/* @var $model Entradaenc */

$this->breadcrumbs=array(
	'Entradaencs'=>array('index'),
	$model->movimiento_id=>array('view','id'=>$model->movimiento_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entradaenc', 'url'=>array('index')),
	array('label'=>'Create Entradaenc', 'url'=>array('create')),
	array('label'=>'View Entradaenc', 'url'=>array('view', 'id'=>$model->movimiento_id)),
	array('label'=>'Manage Entradaenc', 'url'=>array('admin')),
);
?>

<h1>Update Entradaenc <?php echo $model->movimiento_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>