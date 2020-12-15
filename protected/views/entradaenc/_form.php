<?php
/* @var $this EntradaencController */
/* @var $model Entradaenc */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entradaenc-form',
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
		<?php echo $form->labelEx($model,'entradaenc_id'); ?>
		<?php echo $form->textField($model,'entradaenc_id'); ?>
		<?php echo $form->error($model,'entradaenc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoentrada_id'); ?>
		<?php echo $form->textField($model,'tipoentrada_id'); ?>
		<?php echo $form->error($model,'tipoentrada_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proveedor_id'); ?>
		<?php echo $form->textField($model,'proveedor_id'); ?>
		<?php echo $form->error($model,'proveedor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_pago'); ?>
		<?php echo $form->textField($model,'fecha_pago'); ?>
		<?php echo $form->error($model,'fecha_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condcredito_id'); ?>
		<?php echo $form->textField($model,'condcredito_id'); ?>
		<?php echo $form->error($model,'condcredito_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vendedor_id'); ?>
		<?php echo $form->textField($model,'vendedor_id'); ?>
		<?php echo $form->error($model,'vendedor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bultos'); ?>
		<?php echo $form->textField($model,'bultos'); ?>
		<?php echo $form->error($model,'bultos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidades'); ?>
		<?php echo $form->textField($model,'unidades'); ?>
		<?php echo $form->error($model,'unidades'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'docenas'); ?>
		<?php echo $form->textField($model,'docenas'); ?>
		<?php echo $form->error($model,'docenas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saldo'); ?>
		<?php echo $form->textField($model,'saldo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'saldo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->