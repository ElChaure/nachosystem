<?php
/* @var $this EntradadetController */
/* @var $model Entradadet */

$this->breadcrumbs=array(
	'Entradadets'=>array('index'),
	$model->entradadet_id=>array('view','id'=>$model->entradadet_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entradadet', 'url'=>array('index')),
	array('label'=>'Create Entradadet', 'url'=>array('create')),
	array('label'=>'View Entradadet', 'url'=>array('view', 'id'=>$model->entradadet_id)),
	array('label'=>'Manage Entradadet', 'url'=>array('admin')),
);
?>

<h1>Update Entradadet <?php echo $model->entradadet_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>