<?php
/* @var $this CondcreditoController */
/* @var $model Condcredito */

$this->breadcrumbs=array(
	'Condicion Crediticia'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Condicion Crediticia', 'url'=>array('index')),
	array('label'=>'Gestionar Condicion Crediticia', 'url'=>array('admin')),
);
?>

<h1>Crear Condcredito</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>