<?php
/* @var $this Entradadet_tmpController */
/* @var $model Entradadet_tmp */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'entradadet_id'); ?>
		<?php echo $form->textField($model,'entradadet_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entradaenc_id'); ?>
		<?php echo $form->textField($model,'entradaenc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto_id'); ?>
		<?php echo $form->textField($model,'producto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidad_id'); ?>
		<?php echo $form->textField($model,'unidad_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_unitario'); ?>
		<?php echo $form->textField($model,'precio_unitario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iva'); ?>
		<?php echo $form->textField($model,'iva',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_neto'); ?>
		<?php echo $form->textField($model,'total_neto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_final'); ?>
		<?php echo $form->textField($model,'total_final'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->