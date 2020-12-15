<?php
/* @var $this ProveedoresController */
/* @var $data Proveedores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proveedor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proveedor_id), array('view', 'id'=>$data->proveedor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rif')); ?>:</b>
	<?php echo CHtml::encode($data->rif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto')); ?>:</b>
	<?php echo CHtml::encode($data->contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ult_compra')); ?>:</b>
	<?php echo CHtml::encode($data->ult_compra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condcredito_id')); ?>:</b>
	<?php echo CHtml::encode($data->condcredito_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credito_limite')); ?>:</b>
	<?php echo CHtml::encode($data->credito_limite); ?>
	<br />

	*/ ?>

</div>