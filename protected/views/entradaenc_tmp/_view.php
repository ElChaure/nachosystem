<?php
/* @var $this Entradaenc_tmpController */
/* @var $data Entradaenc_tmp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('entradaenc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->entradaenc_id), array('view', 'id'=>$data->entradaenc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoentrada_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipoentrada_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proveedor_id')); ?>:</b>
	<?php echo CHtml::encode($data->proveedor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condcredito_id')); ?>:</b>
	<?php echo CHtml::encode($data->condcredito_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendedor_id')); ?>:</b>
	<?php echo CHtml::encode($data->vendedor_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bultos')); ?>:</b>
	<?php echo CHtml::encode($data->bultos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidades')); ?>:</b>
	<?php echo CHtml::encode($data->unidades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('docenas')); ?>:</b>
	<?php echo CHtml::encode($data->docenas); ?>
	<br />

	*/ ?>

</div>