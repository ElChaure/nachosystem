<?php
/* @var $this CorrelativosController */
/* @var $data Correlativos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->empresa_id), array('view', 'id'=>$data->empresa_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoentrada_1')); ?>:</b>
	<?php echo CHtml::encode($data->tipoentrada_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoentrada_2')); ?>:</b>
	<?php echo CHtml::encode($data->tipoentrada_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoentrada_3')); ?>:</b>
	<?php echo CHtml::encode($data->tipoentrada_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposalida_10')); ?>:</b>
	<?php echo CHtml::encode($data->tiposalida_10); ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('tiposalida_11')); ?>:</b>
	<?php echo CHtml::encode($data->tiposalida_11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposalida_12')); ?>:</b>
	<?php echo CHtml::encode($data->tiposalida_12); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposalida_13')); ?>:</b>
	<?php echo CHtml::encode($data->tiposalida_13); ?>
	<br />	
	
	<?php  /*echo CHtml::encode($data->getAttributeLabel('tipoentrada_4')); ?>:</b>
	<?php echo CHtml::encode($data->tipoentrada_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoentrada_5')); ?>:</b>
	<?php echo CHtml::encode($data->tipoentrada_5); ?>
	<br />





	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposalida_14')); ?>:</b>
	<?php echo CHtml::encode($data->tiposalida_14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposalida_15')); ?>:</b>
	<?php echo CHtml::encode($data->tiposalida_15); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('iva')); ?>:</b>
	<?php echo CHtml::encode($data->iva); ?>
	<br />

	*/ ?>

</div>