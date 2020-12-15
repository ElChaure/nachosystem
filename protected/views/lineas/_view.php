<?php
/* @var $this LineasController */
/* @var $data Lineas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('linea_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->linea_id), array('view', 'id'=>$data->linea_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linea')); ?>:</b>
	<?php echo CHtml::encode($data->linea); ?>
	<br />


</div>