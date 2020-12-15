<?php
/* @var $this FactenccliController */
/* @var $model Factenccli */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factenccli-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empresa_id'); ?>
		<?php echo $form->dropDownList($model,'empresa_id', CHtml::listData(Empresas::model()->findAll(), 'empresa_id', 'nombre')); ?>		
		<?php echo $form->error($model,'empresa_id'); ?>
	</div>
    <fieldset>
	    <table>
		<tr><td>
		<?php echo $form->labelEx($model,'factura_id'); ?>
		<?php echo $form->textField($model,'factura_id'); ?>
		<?php echo $form->error($model,'factura_id'); ?>
	
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php echo $form->dropDownList($model,'cliente_id', CHtml::listData(Clientes::model()->findAll(), 'cliente_id', 'descripcion')); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	    </td>
		<td colspan=3>
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	    </td></tr>
        <tr><td>
	
		<?php echo $form->labelEx($model,'vendedor_id'); ?>
		<?php echo $form->dropDownList($model,'vendedor_id', CHtml::listData(Vendedores::model()->findAll(), 'vendedor_id', 'nombre')); ?>
		<?php echo $form->error($model,'vendedor_id'); ?>
	</td>
    <td>
	
		<?php echo $form->labelEx($model,'condcredito_id'); ?>
		<?php echo $form->dropDownList($model,'condcredito_id', CHtml::listData(Condcredito::model()->findAll(), 'condcredito_id', 'condicion')); ?>
		<?php echo $form->error($model,'condcredito_id'); ?>
	</td><td>
   

		<?php echo $form->labelEx($model,'fecha_emision'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',array(
			'model'=>$model,
			'attribute'=>'fecha_emision',
            'mode'=>'date', 
			'options'=>array(
			'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd'
			) // jquery plugin options
		));?>
		<?php echo $form->error($model,'fecha_emision'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'fecha_pago'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',array(
			'model'=>$model,
			'attribute'=>'fecha_pago',
            'mode'=>'date', 
			'options'=>array(
			'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd'
			) // jquery plugin options
		));?>
	</td></tr>
    <tr>
	<td>
		<?php echo $form->labelEx($model,'bultos'); ?>
		<?php echo $form->textField($model,'bultos'); ?>
		<?php echo $form->error($model,'bultos'); ?>
	</td>
	<td>
		<?php echo $form->labelEx($model,'unidades'); ?>
		<?php echo $form->textField($model,'unidades'); ?>
		<?php echo $form->error($model,'unidades'); ?>
	</td>
	<td>
		<?php echo $form->labelEx($model,'docenas'); ?>
		<?php echo $form->textField($model,'docenas'); ?>
		<?php echo $form->error($model,'docenas'); ?>
	</td></tr>
    <tr>
	<td colspan=4>
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>90,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</td>
	</tr>
	</table>
	</fieldset>
    <?php 
    //$factdetclli=new CActiveDataProvider('Factdetclli');
	//$this->renderPartial('/factdetclli/admin',array(
	//'model'=>$factdetclli,)); 
    
	?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->