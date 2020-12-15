<?php
/* @var $this Entradadet_tmpController */
/* @var $model Entradadet_tmp */

$this->breadcrumbs=array(
	'Entradadet Tmps'=>array('index'),
	$model->entradadet_id=>array('view','id'=>$model->entradadet_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entradadet_tmp', 'url'=>array('index')),
	array('label'=>'Create Entradadet_tmp', 'url'=>array('create')),
	array('label'=>'View Entradadet_tmp', 'url'=>array('view', 'id'=>$model->entradadet_id)),
	array('label'=>'Manage Entradadet_tmp', 'url'=>array('admin')),
);
?>

<h1>Update Entradadet_tmp <?php echo $model->entradadet_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>