<?php
/* @var $this CorrelativosController */
/* @var $model Correlativos */

$this->breadcrumbs=array(
	'Correlativoses'=>array('index'),
	$model->empresa_id=>array('view','id'=>$model->empresa_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Correlativos', 'url'=>array('index')),
	array('label'=>'Crear Correlativos (Solo Empresas Nuevas)', 'url'=>array('create')),
	array('label'=>'Ver Correlativos', 'url'=>array('view', 'id'=>$model->empresa_id)),
	array('label'=>'Gestionar Correlativos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Correlativos Empresa Actual <?php echo $model->empresa_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>