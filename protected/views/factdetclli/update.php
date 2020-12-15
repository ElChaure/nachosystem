<?php
/* @var $this FactdetclliController */
/* @var $model Factdetclli */

$this->breadcrumbs=array(
	'Factdetcllis'=>array('index'),
	$model->factdet_id=>array('view','id'=>$model->factdet_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Factdetclli', 'url'=>array('index')),
	array('label'=>'Create Factdetclli', 'url'=>array('create')),
	array('label'=>'View Factdetclli', 'url'=>array('view', 'id'=>$model->factdet_id)),
	array('label'=>'Manage Factdetclli', 'url'=>array('admin')),
);
?>

<h1>Update Factdetclli <?php echo $model->factdet_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>