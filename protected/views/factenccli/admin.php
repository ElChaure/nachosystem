<?php
/* @var $this FactenccliController */
/* @var $model Factenccli */

$this->breadcrumbs=array(
	'Factencclis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Factenccli', 'url'=>array('index')),
	array('label'=>'Create Factenccli', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#factenccli-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Factencclis</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'factenccli-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'empresa_id',
		'factura_id',
		'cliente_id',
		'direccion',
		'vendedor_id',
		'condcredito_id',
		/*
		'fecha_emision',
		'fecha_pago',
		'bultos',
		'unidades',
		'docenas',
		'observaciones',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
