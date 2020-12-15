<?php
/* @var $this UnidadesController */
/* @var $model Unidades */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Unidades', 'url'=>array('index')),
	array('label'=>'Gestionar Unidades', 'url'=>array('admin')),
);
?>

<h1>Crear Unidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>