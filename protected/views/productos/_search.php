<?php
/* @var $this ProductosController */
/* @var $model Productos */
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
		<?php echo $form->label($model,'producto_id'); ?>
		<?php echo $form->textField($model,'producto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'linea_id'); ?>
		<?php echo $form->textField($model,'linea_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marca_id'); ?>
		<?php echo $form->textField($model,'marca_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_fabricante'); ?>
		<?php echo $form->textField($model,'cod_fabricante',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_prom'); ?>
		<?php echo $form->textField($model,'costo_prom',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ult_costo'); ?>
		<?php echo $form->textField($model,'ult_costo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pvp'); ?>
		<?php echo $form->textField($model,'pvp',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paga_iva'); ?>
		<?php echo $form->textField($model,'paga_iva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'existencia'); ?>
		<?php echo $form->textField($model,'existencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->