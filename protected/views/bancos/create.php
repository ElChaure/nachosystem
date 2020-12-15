<?php
/* @var $this BancosController */
/* @var $model Bancos */

$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Bancos', 'url'=>array('index')),
	array('label'=>'Gestiona Bancos', 'url'=>array('admin')),
);
?>

<h1>Crear Banco</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>