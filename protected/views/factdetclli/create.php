<?php
/* @var $this FactdetclliController */
/* @var $model Factdetclli */

$this->breadcrumbs=array(
	'Factdetcllis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Factdetclli', 'url'=>array('index')),
	array('label'=>'Manage Factdetclli', 'url'=>array('admin')),
);
?>

<h1>Create Factdetclli</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>