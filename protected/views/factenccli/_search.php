<?php
/* @var $this FactenccliController */
/* @var $model Factenccli */
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
		<?php echo $form->label($model,'factura_id'); ?>
		<?php echo $form->textField($model,'factura_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vendedor_id'); ?>
		<?php echo $form->textField($model,'vendedor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condcredito_id'); ?>
		<?php echo $form->textField($model,'condcredito_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_emision'); ?>
		<?php echo $form->textField($model,'fecha_emision'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_pago'); ?>
		<?php echo $form->textField($model,'fecha_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bultos'); ?>
		<?php echo $form->textField($model,'bultos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidades'); ?>
		<?php echo $form->textField($model,'unidades'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'docenas'); ?>
		<?php echo $form->textField($model,'docenas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->