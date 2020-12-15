<?php
/* @var $this EntradadetController */
/* @var $model Entradadet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entradadet-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'entradaenc_id'); ?>
		<?php echo $form->textField($model,'entradaenc_id'); ?>
		<?php echo $form->error($model,'entradaenc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'producto_id'); ?>
		<?php echo $form->textField($model,'producto_id'); ?>
		<?php echo $form->error($model,'producto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad_id'); ?>
		<?php echo $form->textField($model,'unidad_id'); ?>
		<?php echo $form->error($model,'unidad_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_unitario'); ?>
		<?php echo $form->textField($model,'precio_unitario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'precio_unitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iva'); ?>
		<?php echo $form->HiddenField($model,'iva',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'iva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_neto'); ?>
		<?php echo $form->textField($model,'total_neto'); ?>
		<?php echo $form->error($model,'total_neto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_final'); ?>
		<?php echo $form->textField($model,'total_final'); ?>
		<?php echo $form->error($model,'total_final'); ?>
	</div>

	<div class="row buttons">
		<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->