<?php
/* @var $this Salidaenc_tmpController */
/* @var $model Salidaenc_tmp */
$titulo=Yii::app()->getSession()->get('titulo');
$this->breadcrumbs=array(
	'Salida de Inventario'=>array('index'),
	'Crear '.$titulo,
);
/*
$this->menu=array(
	array('label'=>'List Salidaenc_tmp', 'url'=>array('index')),
	array('label'=>'Manage Salidaenc_tmp', 'url'=>array('admin')),
);*/
?>

<h1>Salida de Inventario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>