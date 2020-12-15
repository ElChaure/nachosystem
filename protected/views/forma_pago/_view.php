<?php
/* @var $this Forma_pagoController */
/* @var $data Forma_pago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_pago_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->forma_pago_id), array('view', 'id'=>$data->forma_pago_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_pago')); ?>:</b>
	<?php echo CHtml::encode($data->forma_pago); ?>
	<br />


</div>