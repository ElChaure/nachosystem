<?php
/* @var $this FactdetclliController */
/* @var $model Factdetclli */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'factdet_id'); ?>
		<?php echo $form->textField($model,'factdet_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'factura_id'); ?>
		<?php echo $form->textField($model,'factura_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto_id'); ?>
		<?php echo $form->textField($model,'producto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidad_id'); ?>
		<?php echo $form->textField($model,'unidad_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_venta'); ?>
		<?php echo $form->textField($model,'precio_venta',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->