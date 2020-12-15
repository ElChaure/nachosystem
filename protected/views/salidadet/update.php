<?php
/* @var $this SalidadetController */
/* @var $model Salidadet */

$this->breadcrumbs=array(
	'Salidadets'=>array('index'),
	$model->salidadet_id=>array('view','id'=>$model->salidadet_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salidadet', 'url'=>array('index')),
	array('label'=>'Create Salidadet', 'url'=>array('create')),
	array('label'=>'View Salidadet', 'url'=>array('view', 'id'=>$model->salidadet_id)),
	array('label'=>'Manage Salidadet', 'url'=>array('admin')),
);
?>

<h1>Update Salidadet <?php echo $model->salidadet_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>