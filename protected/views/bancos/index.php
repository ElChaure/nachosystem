<?php
/* @var $this BancosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bancos',
);

$this->menu=array(
	array('label'=>'Crear Banco', 'url'=>array('create')),
	array('label'=>'Gestiona Bancos', 'url'=>array('admin')),
);
?>

<h1>Bancos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
