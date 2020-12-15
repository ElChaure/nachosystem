<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empresa_id'); ?>
		<?php //echo $form->textField($model,'empresa_id'); ?>
		<?php echo $form->dropDownList($model,'empresa_id', CHtml::listData(Empresas::model()->findAll(), 'empresa_id', 'nombre')); ?>
		<?php echo $form->error($model,'empresa_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rif'); ?>
		<?php echo $form->textField($model,'rif',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'rif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacto'); ?>
		<?php echo $form->textField($model,'contacto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ult_venta'); ?>
		<?php echo $form->textField($model,'ult_venta'); ?>
		<?php echo $form->error($model,'ult_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condcredito_id'); ?>
		<?php echo $form->dropDownList($model,'condcredito_id', CHtml::listData(Condcredito::model()->findAll(), 'condcredito_id', 'condicion')); ?>
		<?php echo $form->error($model,'condcredito_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credito_limite'); ?>
		<?php echo $form->textField($model,'credito_limite',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'credito_limite'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
$flashMessages = Yii::app()->user->getFlashes();
if ($flashMessages) {
    echo '<ul class="flashes">';
    foreach($flashMessages as $key => $message) {
        echo '<li><div class="flash-' . $key . '">' . $message . "</div></li>\n";
    }
    echo '</ul>';
}
?>