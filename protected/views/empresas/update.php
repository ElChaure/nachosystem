<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->empresa_id=>array('view','id'=>$model->empresa_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Empresas', 'url'=>array('index')),
	array('label'=>'Crear Empresa', 'url'=>array('create')),
	array('label'=>'Ver Empresa', 'url'=>array('view', 'id'=>$model->empresa_id)),
	array('label'=>'Gestionar Empresas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Empresa <?php echo $model->empresa_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>