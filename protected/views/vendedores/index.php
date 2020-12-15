<?php
/* @var $this VendedoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vendedores',
);

$this->menu=array(
	array('label'=>'Create Vendedores', 'url'=>array('create')),
	array('label'=>'Manage Vendedores', 'url'=>array('admin')),
);
?>

<h1>Vendedores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
