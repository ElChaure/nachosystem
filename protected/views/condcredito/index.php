<?php
/* @var $this CondcreditoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Condicion Crediticia',
);

$this->menu=array(
	array('label'=>'Crear Condicion Crediticia', 'url'=>array('create')),
	array('label'=>'Gestionar Condicion Crediticia', 'url'=>array('admin')),
);
?>

<h1>Condcreditos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
