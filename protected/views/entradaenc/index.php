<?php
/* @var $this EntradaencController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entradaencs',
);

$this->menu=array(
	array('label'=>'Create Entradaenc', 'url'=>array('create')),
	array('label'=>'Manage Entradaenc', 'url'=>array('admin')),
);
?>

<h1>Entradaencs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
