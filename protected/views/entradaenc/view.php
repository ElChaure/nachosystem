<?php
/* @var $this EntradaencController */
/* @var $model Entradaenc */

$this->breadcrumbs=array(
	'Entradas de Inventario'=>array('index'),
	$model->movimiento_id,
);

$this->menu=array(
	array('label'=>'Listar Entradas', 'url'=>array('index')),
	array('label'=>'Gestion de Entradas', 'url'=>array('admin')),
	array('label'=>'Imprime Documento', 'url'=>array('admin')),
	
);
?>

<h1>View Entradaenc #<?php echo $model->movimiento_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'movimiento_id',
		'empresa.nombre',
		'entradaenc_id',
		'tipoentrada_id',
		'tipoentrada.tipoentrada',
		'proveedor.descripcion',
		'fecha',
		'fecha_pago',
		'condcredito.condicion',
		'vendedor.nombre',
		'bultos',
		'unidades',
		'docenas',
		'saldo',
	),
));

Yii::app()->getSession()->add('entradaenc_id', $model->entradaenc_id);
Yii::app()->getSession()->add('tipoentrada_id', $model->tipoentrada_id);



$entrada = new Entradadet;
$entrada->entradaenc_id=$model->entradaenc_id;
$entrada->tipoentrada_id=$model->tipoentrada_id;

$this->renderPartial('/entradadet/admin',array(
'model'=>$entrada,
)); 

?>


 
