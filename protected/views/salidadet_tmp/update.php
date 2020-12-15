<?php
/* @var $this Salidadet_tmpController */
/* @var $model Salidadet_tmp */

$this->breadcrumbs=array(
	'Renglones de Salida de Inventario'=>array('index'),
	$model->salidadet_id=>array('view','id'=>$model->salidadet_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salidadet_tmp', 'url'=>array('index')),
	array('label'=>'Create Salidadet_tmp', 'url'=>array('create')),
	array('label'=>'View Salidadet_tmp', 'url'=>array('view', 'id'=>$model->salidadet_id)),
	array('label'=>'Manage Salidadet_tmp', 'url'=>array('admin')),
);
?>

<h1>Update Salidadet_tmp <?php echo $model->salidadet_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>