<?php
/* @var $this Forma_pagoController */
/* @var $model Forma_pago */

$this->breadcrumbs=array(
	'Forma Pagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Forma_pago', 'url'=>array('index')),
	array('label'=>'Manage Forma_pago', 'url'=>array('admin')),
);
?>

<h1>Create Forma_pago</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>