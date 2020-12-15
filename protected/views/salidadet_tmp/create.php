<?php
/* @var $this Salidadet_tmpController */
/* @var $model Salidadet_tmp */

$this->breadcrumbs=array(
	'Renglones de Salida de Inventario'=>array('index'),
	'Cargar al Documento',
);

$this->menu=array(
	array('label'=>'List Salidadet_tmp', 'url'=>array('index')),
	array('label'=>'Manage Salidadet_tmp', 'url'=>array('admin')),
);
?>

<h1>Cargar Renglones al Documento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>