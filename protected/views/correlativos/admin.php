<?php
/* @var $this CorrelativosController */
/* @var $model Correlativos */

$this->breadcrumbs=array(
	'Correlativos'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Correlativos', 'url'=>array('index')),
	array('label'=>'Crear Correlativos (Solo Empresas Nuevas)', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#correlativos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Correlativos</h1>

<p>
Opcionalmente puede utilizar los operadores de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>)  al comienzo de cada uno de sus valores buscados para especificar como debe ser hecha la comparacion. 
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'correlativos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'empresa_id',
		'tipoentrada_1',
		'tipoentrada_2',
		'tipoentrada_3',
		'tiposalida_10',
		'tiposalida_11',
		'tiposalida_12',		
		'tiposalida_13',		
		/*
		'tipoentrada_4',
		'tipoentrada_5',
		'tiposalida_14',
		'tiposalida_15',
		'iva',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
