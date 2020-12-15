<?php
/* @var $this UnidadesController */
/* @var $data Unidades */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->unidad_id), array('view', 'id'=>$data->unidad_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad')); ?>:</b>
	<?php echo CHtml::encode($data->unidad); ?>
	<br />


</div>