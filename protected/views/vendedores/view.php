<?php
/* @var $this VendedoresController */
/* @var $model Vendedores */

$this->breadcrumbs=array(
	'Vendedores'=>array('index'),
	$model->vendedor_id,
);
Yii::app()->getSession()->add('vendedor_id',$model->vendedor_id);
$this->menu=array(
	array('label'=>'Listar Vendedores', 'url'=>array('index')),
	array('label'=>'Crear Vendedor', 'url'=>array('create')),
	array('label'=>'Actualizar Vendedor', 'url'=>array('update', 'id'=>$model->vendedor_id)),
	array('label'=>'Eliminar Vendedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->vendedor_id),'confirm'=>'Esta seguro de eliminar veste vendedor?')),
	array('label'=>'Reporte de Comisiones','url'=>array('datavend/edit'),'linkOptions'=>array('target'=>'_blank')),
	array('label'=>'Administrar Vendedores', 'url'=>array('admin')),
);
?>

<h1>Ver Vendedor #<?php echo $model->vendedor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'vendedor_id',
		'nombre',
		'comision',
	),
)); ?>
