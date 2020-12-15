<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
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
		<?php echo $form->labelEx($model,'producto_id'); ?>
		<?php echo $form->textField($model,'producto_id'); ?>
		<?php echo $form->error($model,'producto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linea_id'); ?>
		<?php echo $form->textField($model,'linea_id'); ?>
		<?php echo $form->error($model,'linea_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca_id'); ?>
		<?php echo $form->textField($model,'marca_id'); ?>
		<?php echo $form->error($model,'marca_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_fabricante'); ?>
		<?php echo $form->textField($model,'cod_fabricante',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cod_fabricante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costo_prom'); ?>
		<?php echo $form->textField($model,'costo_prom',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'costo_prom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ult_costo'); ?>
		<?php echo $form->textField($model,'ult_costo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ult_costo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pvp'); ?>
		<?php echo $form->textField($model,'pvp',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pvp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paga_iva'); ?>
		<?php echo $form->textField($model,'paga_iva'); ?>
		<?php echo $form->error($model,'paga_iva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'existencia'); ?>
		<?php echo $form->textField($model,'existencia'); ?>
		<?php echo $form->error($model,'existencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->