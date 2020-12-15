<?php
/* @var $this PagoclienteController */
/* @var $model Pagocliente */

$this->breadcrumbs=array(
	'Pagos de Clientes'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Pagos de Clientes', 'url'=>array('index')),
	array('label'=>'Crear Pago de Cliente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pagocliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Pagos de Clientess</h1>

<p>
Opcionalmente puede utilizar los operadores de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>)al comienzo de cada uno de sus valores buscados para especificar como debe ser hecha la comparacion. 
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pagocliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'empresa_id',
		'pagocli_id',
		'cliente_id',
		'forma_pago_id',
		'movimiento_id',
		'documento_nro',
		/*
		'fecha_pago',
		'monto',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
