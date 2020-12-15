<?php
/* @var $this BancosController */
/* @var $model Bancos */

$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	$model->banco_id=>array('view','id'=>$model->banco_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Bancos', 'url'=>array('index')),
	array('label'=>'Crear Banco', 'url'=>array('create')),
	array('label'=>'Ver Banco', 'url'=>array('view', 'id'=>$model->banco_id)),
	array('label'=>'Gestiona Bancos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Banco <?php echo $model->banco_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>