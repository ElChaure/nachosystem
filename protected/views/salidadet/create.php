<?php
/* @var $this SalidadetController */
/* @var $model Salidadet */

$this->breadcrumbs=array(
	'Salidadets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salidadet', 'url'=>array('index')),
	array('label'=>'Manage Salidadet', 'url'=>array('admin')),
);
?>

<h1>Create Salidadet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>