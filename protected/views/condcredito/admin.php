<?php
/* @var $this CondcreditoController */
/* @var $model Condcredito */

$this->breadcrumbs=array(
	'Condicion Crediticia'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Condicion Crediticia', 'url'=>array('index')),
	array('label'=>'Crear Condicion Crediticia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#condcredito-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Condiciones Crediticias</h1>

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
	'id'=>'condcredito-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'condcredito_id',
		'condicion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
