<?php
/* @var $this BancosController */
/* @var $data Bancos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('banco_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->banco_id), array('view', 'id'=>$data->banco_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php //echo CHtml::encode($data->empresa_id); ?>
	<?php echo CHtml::encode($data->empresa->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->nro_cuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agencia')); ?>:</b>
	<?php echo CHtml::encode($data->agencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto')); ?>:</b>
	<?php echo CHtml::encode($data->contacto); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('estatus')); ?>:</b>
	<?php //echo CHtml::encode($data->estatus); ?>
	<?php echo CHtml::encode($data->estado->descripcion); ?>
	<br />
    <br />

</div>