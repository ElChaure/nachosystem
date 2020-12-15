<?php
/* @var $this VendedoresController */
/* @var $model Vendedores */

$this->breadcrumbs=array(
	'Vendedores'=>array('index'),
	$model->vendedor_id=>array('view','id'=>$model->vendedor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vendedores', 'url'=>array('index')),
	array('label'=>'Create Vendedores', 'url'=>array('create')),
	array('label'=>'View Vendedores', 'url'=>array('view', 'id'=>$model->vendedor_id)),
	array('label'=>'Manage Vendedores', 'url'=>array('admin')),
);
?>

<h1>Update Vendedores <?php echo $model->vendedor_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>