<?php
/* @var $this FactenccliController */
/* @var $model Factenccli */

$this->breadcrumbs=array(
	'Factencclis'=>array('index'),
	$model->factura_id=>array('view','id'=>$model->factura_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Factenccli', 'url'=>array('index')),
	array('label'=>'Create Factenccli', 'url'=>array('create')),
	array('label'=>'View Factenccli', 'url'=>array('view', 'id'=>$model->factura_id)),
	array('label'=>'Manage Factenccli', 'url'=>array('admin')),
);
?>

<h1>Update Factenccli <?php echo $model->factura_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>