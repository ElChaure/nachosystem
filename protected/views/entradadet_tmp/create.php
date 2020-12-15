<?php
/* @var $this Entradadet_tmpController */
/* @var $model Entradadet_tmp */

$this->breadcrumbs=array(
	'Entradadet Tmps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Entradadet_tmp', 'url'=>array('index')),
	array('label'=>'Manage Entradadet_tmp', 'url'=>array('admin')),
);
?>

<h1>Create Entradadet_tmp</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>