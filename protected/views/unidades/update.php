<?php
/* @var $this UnidadesController */
/* @var $model Unidades */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	$model->unidad_id=>array('view','id'=>$model->unidad_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Unidades', 'url'=>array('index')),
	array('label'=>'Crear Unidad', 'url'=>array('create')),
	array('label'=>'Ver Unidad', 'url'=>array('view', 'id'=>$model->unidad_id)),
	array('label'=>'Gestionar Unidades', 'url'=>array('admin')),
);
?>

<h1>Actualizar Unidad <?php echo $model->unidad_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>