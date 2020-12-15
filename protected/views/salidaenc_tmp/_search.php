<?php
/* @var $this Salidaenc_tmpController */
/* @var $model Salidaenc_tmp */
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
		<?php echo $form->label($model,'salidaenc_id'); ?>
		<?php echo $form->textField($model,'salidaenc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiposalida_id'); ?>
		<?php echo $form->textField($model,'tiposalida_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condcredito_id'); ?>
		<?php echo $form->textField($model,'condcredito_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vendedor_id'); ?>
		<?php echo $form->textField($model,'vendedor_id'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->