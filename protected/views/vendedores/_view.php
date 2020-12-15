<?php
/* @var $this VendedoresController */
/* @var $data Vendedores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendedor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->vendedor_id), array('view', 'id'=>$data->vendedor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comision')); ?>:</b>
	<?php echo CHtml::encode($data->comision); ?>
	<br />


</div>