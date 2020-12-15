<?php
/* @var $this SalidaencController */
/* @var $model Salidaenc */

$this->breadcrumbs=array(
	'Salidas Formalizadas'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Lista Salidas Formalizadas', 'url'=>array('index')),
	array('label'=>'Reporte Segun Seleccion',  'url'=>array('pdf'), 'linkOptions' => array('target'=>'_blank')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salidaenc-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Salidas de Inventario Formalizadas</h1>

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
	'id'=>'salidaenc-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'movimiento_id',
		'salidaenc_id',
		array(
		'name'=>'tiposalida_id',
                   'value'=>'$data->tiposalida->tiposalida',
                   'filter' => CHtml::listData(Tipossalida::model()->findAll(), 'tiposalida_id', 'tiposalida'),
         ),
		array( 
		'name'=>'cliente_id',
                   'value'=>'$data->cliente->descripcion',
                   'filter' => CHtml::listData(Clientes::model()->findAll(), 'cliente_id', 'descripcion'),
         ),
		'fecha',
		array( 
		'name'=>'condcredito_id',
                   'value'=>'$data->condcredito->condicion',
                   'filter' => CHtml::listData(Condcredito::model()->findAll(), 'condcredito_id', 'condicion'),
         ),
		array( 
		'name'=>'vendedor_id',
                   'value'=>'$data->vendedor->nombre',
                   'filter' => CHtml::listData(Vendedores::model()->findAll(), 'vendedor_id', 'nombre'),
         ),	
		 'saldo',
		/*
		'empresa_id',
		'fecha_pago',
		'bultos',
		'unidades',
		'docenas',
		*/
		array(
			'class'=>'CButtonColumn',
                        'template' => '{view} {imprime}',
                'buttons'=>array(
                        'imprime' => array(
                                'label'=>'Imprime Documento', 
                                'url'=>"CHtml::normalizeUrl(array('impdocumento', 'id'=>\$data->movimiento_id))",
				'imageUrl' => Yii::app()->baseUrl . '/images/printer.png',
                                'options' => array('class'=>'ImprimePDF','target'=>'_blank'),
								'linkOptions' => array('target'=>'_blank')
                        ),
                ),


		),
	),
)); ?>
