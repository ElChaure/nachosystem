<?php
/* @var $this Entradadet_tmpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entradadet Tmps',
);

$this->menu=array(
	array('label'=>'Create Entradadet_tmp', 'url'=>array('create')),
	array('label'=>'Manage Entradadet_tmp', 'url'=>array('admin')),
);
?>

<h1>Entradadet Tmps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
