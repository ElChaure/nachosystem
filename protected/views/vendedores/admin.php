<?php
/* @var $this VendedoresController */
/* @var $model Vendedores */

$this->breadcrumbs=array(
	'Vendedores'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Vendedores', 'url'=>array('index')),
	array('label'=>'Crear Vendedor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vendedores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestion de Vendedores</h1>

<p>
Opcionalmente puede utilizar los operadores de comparacion  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>)  al comienzo de cada uno de sus valores buscados para especificar como debe ser hecha la comparacion. 
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vendedores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'empresa_id',
		'vendedor_id',
		'nombre',
		'comision',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
