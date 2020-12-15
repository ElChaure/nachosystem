<?php
/* @var $this EntradadetController */
/* @var $model Entradadet */

$this->breadcrumbs=array(
	'Entradadets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Entradadet', 'url'=>array('index')),
	array('label'=>'Manage Entradadet', 'url'=>array('admin')),
);
?>

<h1>Create Entradadet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>