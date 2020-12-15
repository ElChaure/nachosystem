<?php
/* @var $this CorrelativosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Correlativoses',
);

$this->menu=array(
	array('label'=>'Crear Correlativos (Solo Empresas Nuevas)', 'url'=>array('create')),
	array('label'=>'Gestionar Correlativos', 'url'=>array('admin')),
);
?>

<h1>Correlativos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
