<?php
/* @var $this FactdetclliController */
/* @var $data Factdetclli */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('factdet_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->factdet_id), array('view', 'id'=>$data->factdet_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('factura_id')); ?>:</b>
	<?php echo CHtml::encode($data->factura_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_id')); ?>:</b>
	<?php echo CHtml::encode($data->producto_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad_id')); ?>:</b>
	<?php echo CHtml::encode($data->unidad_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_venta')); ?>:</b>
	<?php echo CHtml::encode($data->precio_venta); ?>
	<br />


</div>