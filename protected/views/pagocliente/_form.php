<?php
/* @var $this PagoclienteController */
/* @var $model Pagocliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagocliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php $model->empresa_id=Yii::app()->user->empresa_id;
		      $fecha = date("Y-m-d"); 
		      //echo $form->labelEx($model,'empresa_id'); ?>
		<?php echo $form->hiddenField($model,'empresa_id'); ?>
		<?php //echo $form->error($model,'empresa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php //echo $form->textField($model,'cliente_id'); ?>
		<?php //echo $form->dropDownList($model,'cliente_id', CHtml::listData(Clientes::model()->findAll(), 'cliente_id', 'descripcion'));?>
		<?php echo $form->dropDownList($model,'cliente_id',
                   CHtml::listData(Clientes::model()->findAll(),'cliente_id','descripcion'),
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('Pagocliente/Selectcliente'),
                              'update'=>'#'.CHtml::activeId($model,'movimiento_id'),
                              'beforeSend' => 'function(){
                               $("#Pagocliente_movimiento_id").find("option").remove();
                               }',  
                            ),'prompt'=>'Seleccione'
                            
                            
                        )
                        ); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_pago_id'); ?>
		<?php //echo $form->textField($model,'forma_pago_id'); ?>
		<?php echo $form->dropDownList($model,'forma_pago_id', CHtml::listData(Forma_pago::model()->findAll(), 'forma_pago_id', 'forma_pago'));?>
		<?php echo $form->error($model,'forma_pago_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'movimiento_id'); ?>
		<?php //echo $form->textField($model,'movimiento_id'); ?>
		<?php echo $form->dropDownList($model,'movimiento_id', CHtml::listData(Clientespendientes::model()->findAll(), 'movimiento_id', 'linea'));?>
		<?php echo $form->error($model,'movimiento_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documento_nro'); ?>
		<?php echo $form->textField($model,'documento_nro',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'documento_nro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_pago'); ?>
		<?php //echo $form->textField($model,'fecha_pago'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array('model'=>$model,'attribute'=>'fecha_pago','language'=>'es','options'=>array('showAnim'=>'fold','dateFormat'=>'yy-mm-dd',),'htmlOptions'=>array('style'=>'height:20px;','value'=>$fecha,),)); ?>
		<?php echo $form->error($model,'fecha_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
		<?php echo $form->error($model,'monto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->