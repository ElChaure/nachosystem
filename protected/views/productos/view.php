<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->producto_id,
);

$this->menu=array(
	array('label'=>'Listar Productos', 'url'=>array('index')),
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Actualizar Producto', 'url'=>array('update', 'id'=>$model->producto_id)),
	array('label'=>'Eliminar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->producto_id),'confirm'=>'Esta seguro de eliminar este Producto?')),
	array('label'=>'Gestionar Productos', 'url'=>array('admin')),
	array('label'=>'Kardex del Producto', 'url'=>array('kardex', 'id'=>$model->producto_id), 'linkOptions' => array('target'=>'_blank')),
	
);
?>

<h1>Ver Producto #<?php echo $model->producto_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresa_id',
		'producto_id',
		'descripcion',
		'linea_id',
		'marca_id',
		'cod_fabricante',
		'costo_prom',
		'ult_costo',
		'pvp',
		'paga_iva',
		'existencia',
	),
)); ?>
