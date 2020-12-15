<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Empresas', 'url'=>array('index')),
	array('label'=>'Gestionar Empresas', 'url'=>array('admin')),
);
?>

<h1>Crear Empresa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>