<?php
/* @var $this Salidaenc_tmpController */
/* @var $model Salidaenc_tmp */

$this->breadcrumbs=array(
	'Salidaenc Tmps'=>array('index'),
	$model->salidaenc_id=>array('view','id'=>$model->salidaenc_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salidaenc_tmp', 'url'=>array('index')),
	array('label'=>'Create Salidaenc_tmp', 'url'=>array('create')),
	array('label'=>'View Salidaenc_tmp', 'url'=>array('view', 'id'=>$model->salidaenc_id)),
	array('label'=>'Manage Salidaenc_tmp', 'url'=>array('admin')),
);
?>

<h1>Update Salidaenc_tmp <?php echo $model->salidaenc_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>