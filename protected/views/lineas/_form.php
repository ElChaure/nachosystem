<?php
/* @var $this LineasController */
/* @var $model Lineas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lineas-form',
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
		<?php echo $form->labelEx($model,'linea'); ?>
		<?php echo $form->textField($model,'linea',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'linea'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->