<?php
/* @var $this LineasController */
/* @var $model Lineas */

$this->breadcrumbs=array(
	'Lineas de Inventario'=>array('index'),
	'Gestion',
);

$this->menu=array(
	array('label'=>'Listar Lineas', 'url'=>array('index')),
	array('label'=>'Crear Linea', 'url'=>array('create')),
	array('label'=>'Reporte de Lineas',  'url'=>array('reporte1'), 'linkOptions' => array('target'=>'_blank')),	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lineas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Lineas</h1>

<p>
Opcionalmente puede utilizar los operadores de comparacion  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de sus valores buscados para especificar como debe ser hecha la comparacion.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lineas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'empresa_id',
		'linea_id',
		'linea',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
