<?php
/* @var $this Forma_pagoController */
/* @var $model Forma_pago */

$this->breadcrumbs=array(
	'Forma Pagos'=>array('index'),
	$model->forma_pago_id=>array('view','id'=>$model->forma_pago_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Forma_pago', 'url'=>array('index')),
	array('label'=>'Create Forma_pago', 'url'=>array('create')),
	array('label'=>'View Forma_pago', 'url'=>array('view', 'id'=>$model->forma_pago_id)),
	array('label'=>'Manage Forma_pago', 'url'=>array('admin')),
);
?>

<h1>Update Forma_pago <?php echo $model->forma_pago_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>