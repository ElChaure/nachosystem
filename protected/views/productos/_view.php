<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->producto_id), array('view', 'id'=>$data->producto_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linea_id')); ?>:</b>
	<?php echo CHtml::encode($data->linea_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca_id')); ?>:</b>
	<?php echo CHtml::encode($data->marca_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_fabricante')); ?>:</b>
	<?php echo CHtml::encode($data->cod_fabricante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_prom')); ?>:</b>
	<?php echo CHtml::encode($data->costo_prom); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ult_costo')); ?>:</b>
	<?php echo CHtml::encode($data->ult_costo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pvp')); ?>:</b>
	<?php echo CHtml::encode($data->pvp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paga_iva')); ?>:</b>
	<?php echo CHtml::encode($data->paga_iva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('existencia')); ?>:</b>
	<?php echo CHtml::encode($data->existencia); ?>
	<br />

	*/ ?>

</div>