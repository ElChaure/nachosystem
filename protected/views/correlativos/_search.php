<?php
/* @var $this CorrelativosController */
/* @var $model Correlativos */
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
		<?php echo $form->label($model,'tipoentrada_1'); ?>
		<?php echo $form->textField($model,'tipoentrada_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoentrada_2'); ?>
		<?php echo $form->textField($model,'tipoentrada_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoentrada_3'); ?>
		<?php echo $form->textField($model,'tipoentrada_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiposalida_10'); ?>
		<?php echo $form->textField($model,'tiposalida_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiposalida_11'); ?>
		<?php echo $form->textField($model,'tiposalida_11'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'tiposalida_12'); ?>
		<?php echo $form->textField($model,'tiposalida_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiposalida_13'); ?>
		<?php echo $form->textField($model,'tiposalida_13'); ?>
	</div>	


	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->