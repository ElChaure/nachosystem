<?php
/* @var $this Salidadet_tmpController */
/* @var $model Salidadet_tmp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salidadet-tmp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'salidadet_id'); ?>
		<?php //echo $form->textField($model,'salidadet_id'); ?>
		<?php //echo $form->error($model,'salidadet_id'); ?>
	</div>
    <table>
	<tr>
	<td rowspan="2"  style="Display:none">
	<div class="row">
		<?php 
		      $model->salidaenc_id=Yii::app()->getSession()->get('corrsalida');
			  $model->iva=Yii::app()->getSession()->get('iva');
			  $model->total_neto=0;
			  $model->total_final=0;
			  echo $form->labelEx($model,'salidaenc_id'); ?>
		<?php echo $form->textField($model,'salidaenc_id',array('readonly'=>true)); ?>
		<?php echo $form->error($model,'salidaenc_id'); ?>
	</div>
    </td>
	<td>
	<div class="row">
		<?php echo $form->labelEx($model,'producto_id'); ?>
		<?php //echo $form->textField($model,'producto_id'); ?>
		<?php /*echo Chosen::activeDropDownList($model, 'producto_id', CHtml::listData(Productos::model()->findAll(), 'producto_id', 'cod_fabricante'),
			array(
			       'data-placeholder' => '-- Seleccione un Producto --',
			       'style'=>'width:645px',  
			       'options'=>array(
				  'maxSelectedOptions' => 3,
				  'displaySelectedOptions' => true,
			    ))
			);

			*/?>
        <?php echo $form->dropDownList($model,'producto_id', CHtml::listData(Productos::model()->findAll(), 'producto_id', 'cod_fabricante')); ?>			
		<?php echo $form->error($model,'producto_id'); ?>
	</div>
    </td>
	<td>
	<div class="row">
		<?php echo $form->labelEx($model,'unidad_id'); ?>
		<?php //echo $form->textField($model,'unidad_id'); ?>
		<?php echo $form->dropDownList($model,'unidad_id', CHtml::listData(Unidades::model()->findAll(), 'unidad_id', 'unidad')); ?>
		<?php echo $form->error($model,'unidad_id'); ?>
	</div>
    </td>
	<td>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>
    </td>
	<td>
	<div class="row">
		<?php echo $form->labelEx($model,'precio_unitario'); ?>
		<?php echo $form->textField($model,'precio_unitario',array('size'=>10,'maxlength'=>10));?>
		<?php echo $form->error($model,'precio_unitario'); ?>
	</div>
    </td>
	<td>
	<div class="row">
		<?php echo $form->labelEx($model,'iva'); ?>
		<?php echo $form->textField($model,'iva',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'iva'); ?>
	</div>
    </td>
	<td style="Display:none">
	<div class="row">
		<?php echo $form->labelEx($model,'total_neto'); ?>
		<?php echo $form->textField($model,'total_neto'); ?>
		<?php echo $form->error($model,'total_neto'); ?>
	</div>
    </td>
	<td style="Display:none">
	<div class="row">
		<?php echo $form->labelEx($model,'total_final'); ?>
		<?php echo $form->textField($model,'total_final'); ?>
		<?php echo $form->error($model,'total_final'); ?>
	</div>
    </td>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Cargar Producto' : 'Save'); ?>
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