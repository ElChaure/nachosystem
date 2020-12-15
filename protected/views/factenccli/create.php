<?php
/* @var $this FactenccliController */
/* @var $model Factenccli */

$this->breadcrumbs=array(
	'Factencclis'=>array('index'),
	'Create',
);

$item=1;

$this->menu=array(
	array('label'=>'List Factenccli', 'url'=>array('index')),
	array('label'=>'Manage Factenccli', 'url'=>array('admin')),
);
?>

<h1>Create Factenccli</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php //echo $this->renderPartial('_form', array('model'=>$model,'tmpventa'=>$tmpventa,'item'=>$item,)); ?>