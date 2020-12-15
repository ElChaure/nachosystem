<?php
/* @var $this Entradaenc_tmpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entradaenc Tmps',
);

$this->menu=array(
	array('label'=>'Create Entradaenc_tmp', 'url'=>array('create')),
	array('label'=>'Manage Entradaenc_tmp', 'url'=>array('admin')),
);
?>

<h1>Entradaenc Tmps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
