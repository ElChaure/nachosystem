<?php
/* @var $this Entradaenc_tmpController */
/* @var $model Entradaenc_tmp */
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
		<?php echo $form->label($model,'entradaenc_id'); ?>
		<?php echo $form->textField($model,'entradaenc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoentrada_id'); ?>
		<?php echo $form->textField($model,'tipoentrada_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proveedor_id'); ?>
		<?php echo $form->textField($model,'proveedor_id'); ?>
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