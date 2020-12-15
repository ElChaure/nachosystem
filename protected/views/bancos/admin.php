<?php
/* @var $this BancosController */
/* @var $model Bancos */

$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	'Gestion',
);

$this->menu=array(
	array('label'=>'Listar Bancos', 'url'=>array('index')),
	array('label'=>'Crear Banco', 'url'=>array('create')),
	array('label'=>'Reporte de Bancos',  'url'=>array('reporte1'), 'linkOptions' => array('target'=>'_blank')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bancos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestiona Bancos</h1>

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
	'id'=>'bancos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'empresa_id',
		'banco_id',
		'nombre',
		'nro_cuenta',
		'agencia',
		'telefono',
		array( 
		'name'=>'estatus',
                   'value'=>'$data->estado->descripcion',
                   'filter' => CHtml::listData(Estatus::model()->findAll(), 'estatus', 'descripcion'),
         ),	
		
		
		/*
		'contacto',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
