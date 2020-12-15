<?php
/* @var $this EmpresasController */
/* @var $data Empresas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->empresa_id), array('view', 'id'=>$data->empresa_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rif')); ?>:</b>
	<?php echo CHtml::encode($data->rif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('representante')); ?>:</b>
	<?php echo CHtml::encode($data->representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->mes_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_fiscal')); ?>:</b>
	<?php echo CHtml::encode($data->anio_fiscal); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('iva')); ?>:</b>
	<?php echo CHtml::encode($data->iva); ?>
	<br />


</div>