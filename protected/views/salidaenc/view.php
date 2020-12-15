<?php
/* @var $this SalidaencController */
/* @var $model Salidaenc */

$this->breadcrumbs=array(
	'Salidas de Inventario'=>array('index'),
	$model->movimiento_id,
);

$this->menu=array(
	array('label'=>'Listar Salidas', 'url'=>array('index')),
	array('label'=>'Gestion de Salidas', 'url'=>array('admin')),
	array('label'=>'Anular Documento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('anuladoc','id'=>$model->movimiento_id),'confirm'=>'Esta seguro de Anular esta Documento?')),
	array('label'=>'Imprime Documento', 'url'=>array('impdocumento&id='.$model->movimiento_id),'linkOptions' => array('target'=>'_blank')),
	
	
);
?>

<h1>Ver Documento de Salida de Inventario #<?php echo $model->movimiento_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'movimiento_id',
		'empresa.nombre',
		'salidaenc_id',
		'tiposalida_id',
		'tiposalida.tiposalida',
		'cliente.descripcion',
		'fecha',
		'fecha_pago',
		'condcredito.condicion',
		'vendedor.nombre',
		'bultos',
		'unidades',
		'docenas',
        'neto',		
		'descuento',
        'iva',				
		'saldo',
	),
));

Yii::app()->getSession()->add('salidaenc_id', $model->salidaenc_id);
Yii::app()->getSession()->add('tiposalida_id', $model->tiposalida_id);



$salida = new Salidadet;
$salida->salidaenc_id=$model->salidaenc_id;
$salida->tiposalida_id=$model->tiposalida_id;

$this->renderPartial('/salidadet/admin',array(
'model'=>$salida,
)); 

?>


 
