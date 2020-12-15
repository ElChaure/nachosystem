<?php
/* @var $this EmpresasController */
/* @var $model Empresas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rif'); ?>
		<?php echo $form->textField($model,'rif',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'representante'); ?>
		<?php echo $form->textField($model,'representante',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mes_inicio'); ?>
		<?php echo $form->textField($model,'mes_inicio'); ?>
		<?php echo $form->error($model,'mes_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio_fiscal'); ?>
		<?php echo $form->textField($model,'anio_fiscal'); ?>
		<?php echo $form->error($model,'anio_fiscal'); ?>
	</div>
	
		<div class="row">
		<?php echo $form->labelEx($model,'iva'); ?>
		<?php echo $form->textField($model,'iva'); ?>
		<?php echo $form->error($model,'iva'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->