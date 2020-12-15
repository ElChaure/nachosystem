<?php
/* @var $this CorrelativosController */
/* @var $model Correlativos */

$this->breadcrumbs=array(
	'Correlativoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Correlativos', 'url'=>array('index')),
	array('label'=>'Gestionar Correlativos', 'url'=>array('admin')),
);
?>

<h1>Crear Correlativos (Solo Empresas Nuevas)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>