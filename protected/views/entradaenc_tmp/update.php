<?php
/* @var $this Entradaenc_tmpController */
/* @var $model Entradaenc_tmp */

$this->breadcrumbs=array(
	'Entradaenc Tmps'=>array('index'),
	$model->entradaenc_id=>array('view','id'=>$model->entradaenc_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entradaenc_tmp', 'url'=>array('index')),
	array('label'=>'Create Entradaenc_tmp', 'url'=>array('create')),
	array('label'=>'View Entradaenc_tmp', 'url'=>array('view', 'id'=>$model->entradaenc_id)),
	array('label'=>'Manage Entradaenc_tmp', 'url'=>array('admin')),
);
?>

<h1>Update Entradaenc_tmp <?php echo $model->entradaenc_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>