<?php
/* @var $this Entradadet_tmpController */
/* @var $model Entradadet_tmp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entradadet-tmp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'entradadet_id'); ?>
		<?php //echo $form->textField($model,'entradadet_id'); ?>
		<?php //echo $form->error($model,'entradadet_id'); ?>
	</div>
    <table>
	<tr>
	<td rowspan="2"  style="Display:none">
	<div class="row">
		<?php 
		      $model->entradaenc_id=Yii::app()->getSession()->get('correntrada');
			  $model->iva=Yii::app()->getSession()->get('iva');
			  $model->total_neto=0;
			  $model->total_final=0;
			  echo $form->labelEx($model,'entradaenc_id'); ?>
		<?php echo $form->textField($model,'entradaenc_id',array('readonly'=>true)); ?>
		<?php echo $form->error($model,'entradaenc_id'); ?>
	</div>
    </td>
	<td>
	<div class="row">
		<?php echo $form->labelEx($model,'producto_id'); ?>
		<?php echo $form->textField($model,'producto_id'); ?>
		<?php //echo $form->dropDownList($model,'producto_id', CHtml::listData(Productos::model()->findAll(), 'producto_id', 'producto_id')); ?>
		<?php //echo $form->hiddenField($model,'producto_id',array());?> 
		<?php /* $this->widget('EJuiAutoCompleteFkField', array(
			  'model'=>$model, 
			  'attribute'=>'producto_id', //the FK field (from CJuiInputWidget)
			  // controller method to return the autoComplete data (from CJuiAutoComplete)
			  'sourceUrl'=>Yii::app()->createUrl('/entradadet_tmp/findproducto'), 
			  // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
			  'showFKField'=>true,
			   // display size of the FK field.  only matters if not hidden.  defaults to 10
			  'FKFieldSize'=>6, 
			  'relName'=>'producto_id', // the relation name defined above
			  'displayAttr'=>'producto_id',  // attribute or pseudo-attribute to display
			  // length of the AutoComplete/display field, defaults to 50
			  'autoCompleteLength'=>4,
			  // any attributes of CJuiAutoComplete and jQuery JUI AutoComplete widget may 
			  // also be defined.  read the code and docs for all options
			  'options'=>array(
          // number of characters that must be typed before 
          // autoCompleter returns a value, defaults to 2
          'minLength'=>2, 
      ),
 ));*/?>
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