<?php
/* @var $this CorrelativosController */
/* @var $model Correlativos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'correlativos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empresa_id'); ?>
		<?php echo $form->dropDownList($model,'empresa_id', CHtml::listData(Empresas::model()->findAll(), 'empresa_id', 'nombre')); ?>
		<?php echo $form->error($model,'empresa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoentrada_1'); ?>
		<?php echo $form->textField($model,'tipoentrada_1'); ?>
		<?php echo $form->error($model,'tipoentrada_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoentrada_2'); ?>
		<?php echo $form->textField($model,'tipoentrada_2'); ?>
		<?php echo $form->error($model,'tipoentrada_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoentrada_3'); ?>
		<?php echo $form->textField($model,'tipoentrada_3'); ?>
		<?php echo $form->error($model,'tipoentrada_3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'tipoentrada_4'); ?>
		<?php //echo $form->textField($model,'tipoentrada_4'); ?>
		<?php //echo $form->error($model,'tipoentrada_4'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'tipoentrada_5'); ?>
		<?php //echo $form->textField($model,'tipoentrada_5'); ?>
		<?php //echo $form->error($model,'tipoentrada_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiposalida_10'); ?>
		<?php echo $form->textField($model,'tiposalida_10'); ?>
		<?php echo $form->error($model,'tiposalida_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiposalida_11'); ?>
		<?php echo $form->textField($model,'tiposalida_11'); ?>
		<?php echo $form->error($model,'tiposalida_11'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'tiposalida_12'); ?>
		<?php echo $form->textField($model,'tiposalida_12'); ?>
		<?php echo $form->error($model,'tiposalida_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiposalida_13'); ?>
		<?php echo $form->textField($model,'tiposalida_13'); ?>
		<?php echo $form->error($model,'tiposalida_13'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'tiposalida_14'); ?>
		<?php //echo $form->textField($model,'tiposalida_14'); ?>
		<?php //echo $form->error($model,'tiposalida_14'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'tiposalida_15'); ?>
		<?php //echo $form->textField($model,'tiposalida_15'); ?>
		<?php //echo $form->error($model,'tiposalida_15'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'iva'); ?>
		<?php //echo $form->textField($model,'iva'); ?>
		<?php //echo $form->error($model,'iva'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->