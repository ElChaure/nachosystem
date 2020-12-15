<?php
/* @var $this FactdetclliController */
/* @var $model Factdetclli */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factdetclli-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'factura_id'); ?>
		<?php echo $form->textField($model,'factura_id'); ?>
		<?php echo $form->error($model,'factura_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'producto_id'); ?>
		<?php echo $form->textField($model,'producto_id'); ?>
		<?php echo $form->error($model,'producto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad_id'); ?>
		<?php echo $form->textField($model,'unidad_id'); ?>
		<?php echo $form->error($model,'unidad_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_venta'); ?>
		<?php echo $form->textField($model,'precio_venta',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'precio_venta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->