<?php
/* @var $this Forma_pagoController */
/* @var $model Forma_pago */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'forma-pago-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con  <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_pago_id'); ?>
		<?php echo $form->textField($model,'forma_pago_id'); ?>
		<?php echo $form->error($model,'forma_pago_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_pago'); ?>
		<?php echo $form->textField($model,'forma_pago',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'forma_pago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->