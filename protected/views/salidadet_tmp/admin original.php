<?php
/* @var $this Salidadet_tmpController */
/* @var $model Salidadet_tmp */

$this->breadcrumbs=array(
	'Salidadet Tmps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Salidadet_tmp', 'url'=>array('index')),
	array('label'=>'Create Salidadet_tmp', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salidadet-tmp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Salidadet Tmps</h1>

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
	'id'=>'salidadet-tmp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'salidadet_id',
		'salidaenc_id',
		'producto_id',
		'unidad_id',
		'cantidad',
		'precio_unitario',
		/*
		'iva',
		'total_neto',
		'total_final',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
