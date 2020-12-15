<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Gestion',
);

$this->menu=array(
	array('label'=>'Listar Productos', 'url'=>array('index')),
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Reporte General de Productos',  'url'=>array('reporte1'), 'linkOptions' => array('target'=>'_blank')),
	array('label'=>'Reporte de Productos con Existencias',  'url'=>array('reporte2'), 'linkOptions' => array('target'=>'_blank')),
	array('label'=>'Reporte de Productos con Lineas', 'url'=>array('reporte3'), 'linkOptions' => array('target'=>'_blank')),	
	array('label'=>'Reporte de Toma de Inventario Fisico', 'url'=>array('reporte04')),
	
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#productos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Productos</h1>

<p>
Opcionalmente puede utilizar los operadores de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de sus valores buscados para especificar como debe ser hecha la comparacion.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'empresa_id',
		'producto_id',
		'descripcion',
		'linea_id',
		'marca_id',
		'cod_fabricante',
		/*
		'costo_prom',
		'ult_costo',
		'pvp',
		'paga_iva',
		'existencia',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
