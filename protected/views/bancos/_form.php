<?php
/* @var $this BancosController */
/* @var $model Bancos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bancos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empresa_id'); ?>
		<?php //echo $form->textField($model,'empresa_id'); ?>
		<?php echo $form->dropDownList($model,'empresa_id', CHtml::listData(Empresas::model()->findAll(), 'empresa_id', 'nombre')); ?>
		<?php echo $form->error($model,'empresa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_cuenta'); ?>
		<?php echo $form->textField($model,'nro_cuenta',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nro_cuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agencia'); ?>
		<?php echo $form->textArea($model,'agencia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'agencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacto'); ?>
		<?php echo $form->textField($model,'contacto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contacto'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'estatus'); ?>
		<?php echo $form->dropDownList($model,'estatus', CHtml::listData(Estatus::model()->findAll(), 'estatus', 'descripcion')); ?>
		<?php echo $form->error($model,'estatus'); ?>
	</div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->