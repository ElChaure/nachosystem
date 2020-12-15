<?php
/* @var $this Entradaenc_tmpController */
/* @var $model Entradaenc_tmp */
$titulo=Yii::app()->getSession()->get('titulo');
$this->breadcrumbs=array(
	'Entrada de Inventario'=>array('index'),
	'Crear '.$titulo,
);
/*
$this->menu=array(
	array('label'=>'List Entradaenc_tmp', 'url'=>array('index')),
	array('label'=>'Manage Entradaenc_tmp', 'url'=>array('admin')),
);*/
?>

<h1>Entrada de Inventario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>