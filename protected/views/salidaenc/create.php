<?php
/* @var $this SalidaencController */
/* @var $model Salidaenc */

$this->breadcrumbs=array(
	'Salidas de Inventario'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salidaenc', 'url'=>array('index')),
	array('label'=>'Manage Salidaenc', 'url'=>array('admin')),
);
?>

<h1>Create Salidaenc</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>