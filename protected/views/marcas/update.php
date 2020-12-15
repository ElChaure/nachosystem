<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->marca_id=>array('view','id'=>$model->marca_id),
	'Actulizar',
);

$this->menu=array(
	array('label'=>'Listar Marcas', 'url'=>array('index')),
	array('label'=>'Crear Marca', 'url'=>array('create')),
	array('label'=>'Ver Marca', 'url'=>array('view', 'id'=>$model->marca_id)),
	array('label'=>'Gestionar Marcas', 'url'=>array('admin')),
);
?>

<h1>Actuliza Marca <?php echo $model->marca_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>