<?php
/* @var $this Salidaenc_tmpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salidaenc Tmps',
);

$this->menu=array(
	array('label'=>'Create Salidaenc_tmp', 'url'=>array('create')),
	array('label'=>'Manage Salidaenc_tmp', 'url'=>array('admin')),
);
?>

<h1>Salidaenc Tmps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
