<?php
/* @var $this Salidaenc_tmpController */
/* @var $model Salidaenc_tmp */

$this->breadcrumbs=array(
	'Salidaenc Tmps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Salidaenc_tmp', 'url'=>array('index')),
	array('label'=>'Create Salidaenc_tmp', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salidaenc-tmp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Salidaenc Tmps</h1>

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
	'id'=>'salidaenc-tmp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'empresa_id',
		'salidaenc_id',
		'tiposalida_id',
		'cliente_id',
		'fecha',
		'condcredito_id',
		/*
		'vendedor_id',
		'bultos',
		'unidades',
		'docenas',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
