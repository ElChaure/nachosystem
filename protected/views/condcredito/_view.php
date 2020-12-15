<?php
/* @var $this CondcreditoController */
/* @var $data Condcredito */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('condcredito_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->condcredito_id), array('view', 'id'=>$data->condcredito_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condicion')); ?>:</b>
	<?php echo CHtml::encode($data->condicion); ?>
	<br />


</div>