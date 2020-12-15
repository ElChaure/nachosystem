<?php
/* @var $this PagoclienteController */
/* @var $data Pagocliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagocli_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pagocli_id), array('view', 'id'=>$data->pagocli_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_pago_id')); ?>:</b>
	<?php echo CHtml::encode($data->forma_pago_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movimiento_id')); ?>:</b>
	<?php echo CHtml::encode($data->movimiento_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documento_nro')); ?>:</b>
	<?php echo CHtml::encode($data->documento_nro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_pago')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pago); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	*/ ?>

</div>