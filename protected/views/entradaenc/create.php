<?php
/* @var $this EntradaencController */
/* @var $model Entradaenc */

$this->breadcrumbs=array(
	'Entradaencs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Entradaenc', 'url'=>array('index')),
	array('label'=>'Manage Entradaenc', 'url'=>array('admin')),
);
?>

<h1>Create Entradaenc</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>