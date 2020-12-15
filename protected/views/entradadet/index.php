<?php
/* @var $this EntradadetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entradadets',
);

$this->menu=array(
	array('label'=>'Create Entradadet', 'url'=>array('create')),
	array('label'=>'Manage Entradadet', 'url'=>array('admin')),
);
?>

<h1>Entradadets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
