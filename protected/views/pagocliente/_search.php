<?php
/* @var $this PagoclienteController */
/* @var $model Pagocliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'empresa_id'); ?>
		<?php echo $form->textField($model,'empresa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagocli_id'); ?>
		<?php echo $form->textField($model,'pagocli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_pago_id'); ?>
		<?php echo $form->textField($model,'forma_pago_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'movimiento_id'); ?>
		<?php echo $form->textField($model,'movimiento_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documento_nro'); ?>
		<?php echo $form->textField($model,'documento_nro',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_pago'); ?>
		<?php echo $form->textField($model,'fecha_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->