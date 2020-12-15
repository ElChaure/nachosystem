<?php
/* @var $this SalidaencController */
/* @var $data Salidaenc */
?>
<fieldset>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('movimiento_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->movimiento_id), array('view', 'id'=>$data->movimiento_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php //echo CHtml::encode($data->empresa_id); ?>
	<?php echo CHtml::encode($data->empresa->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salidaenc_id')); ?>:</b>
	<?php echo CHtml::encode($data->salidaenc_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposalida_id')); ?>:</b>
	<?php //echo CHtml::encode($data->tiposalida_id); ?>
	<?php echo CHtml::encode($data->tiposalida->tiposalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php //echo CHtml::encode($data->cliente_id); ?>
	<?php echo CHtml::encode($data->cliente->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_pago')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pago); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('condcredito_id')); ?>:</b>
	<?php echo CHtml::encode($data->condcredito_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendedor_id')); ?>:</b>
	<?php echo CHtml::encode($data->vendedor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bultos')); ?>:</b>
	<?php echo CHtml::encode($data->bultos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidades')); ?>:</b>
	<?php echo CHtml::encode($data->unidades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('docenas')); ?>:</b>
	<?php echo CHtml::encode($data->docenas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saldo')); ?>:</b>
	<?php echo CHtml::encode($data->saldo); ?>
	<br />

	*/ ?>

</div>
</fieldset>