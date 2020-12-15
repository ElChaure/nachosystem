<?php
/* @var $this CondcreditoController */
/* @var $model Condcredito */

$this->breadcrumbs=array(
	'Condicion Crediticia'=>array('index'),
	$model->condcredito_id=>array('view','id'=>$model->condcredito_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Condicion Crediticia', 'url'=>array('index')),
	array('label'=>'Crear Condicion Crediticia', 'url'=>array('create')),
	array('label'=>'Ver Condicion Crediticia', 'url'=>array('view', 'id'=>$model->condcredito_id)),
	array('label'=>'Gestionar Condicion Crediticia', 'url'=>array('admin')),
);
?>

<h1>Actualizar Condicion Crediticia <?php echo $model->condcredito_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>