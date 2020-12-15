<?php
/* @var $this EntradadetController */
/* @var $data Entradadet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('entradadet_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->entradadet_id), array('view', 'id'=>$data->entradadet_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entradaenc_id')); ?>:</b>
	<?php echo CHtml::encode($data->entradaenc_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_id')); ?>:</b>
	<?php echo CHtml::encode($data->producto_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad_id')); ?>:</b>
	<?php echo CHtml::encode($data->unidad_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_unitario')); ?>:</b>
	<?php echo CHtml::encode($data->precio_unitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iva')); ?>:</b>
	<?php echo CHtml::encode($data->iva); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_neto')); ?>:</b>
	<?php echo CHtml::encode($data->total_neto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_final')); ?>:</b>
	<?php echo CHtml::encode($data->total_final); ?>
	<br />

	*/ ?>

</div>