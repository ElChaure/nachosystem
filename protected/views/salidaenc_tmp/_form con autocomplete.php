<?php
/* @var $this Salidaenc_tmpController */
/* @var $model Salidaenc_tmp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salidaenc-tmp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model);
    $titulo=Yii::app()->getSession()->get('titulo');
	$fecha = date("Y-m-d"); 
	$model->empresa_id=Yii::app()->user->empresa_id;
	$model->tiposalida_id=Yii::app()->getSession()->get('tipodoc');
	$model->salidaenc_id=Yii::app()->getSession()->get('corrsalida');
    $td=Yii::app()->getSession()->get('tipodoc'); 
    /*	
    if ($td == 11){
        $url=Yii::app()->request->baseUrl;
		echo CHtml::button('Buscar Factura', array(
				'name'=>'Agregar Nuevo Producto',
				'onclick'=>"window.open ('?r=/salidaenc_tmp/notacred', 'busca_factura', config='height=350, width=900, toolbar=no, menubar=no, scrollbars=yes, resizable=no, location=no, directories=no, status=no')"
		));
 	}*/
	
	
	?>
    <fieldset>
     <legend><?php echo $titulo;?></legend>	
    <div class="alignleft">
	
	
	
	<div class="column">
		<?php 
           // echo $form->labelEx($model,'empresa_id'); ?>
		<?php echo $form->hiddenField($model,'empresa_id'); ?>
		<?php //echo $form->error($model,'empresa_id'); ?>
	</div>
	
	<div class="column">
		<?php if ($td == 11){ 
		      echo $form->labelEx($model,'afectado_id'); 
		      echo $form->hiddenField($model,'afectado_id');
              $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
	'name'=>'000000',
	'value'=>'000000',
	'source'=>$this->createUrl('salidaenc_tmp/autocompletefinal'),
	// additional javascript options for the autocomplete plugin
	'options'=>array(
			'showAnim'=>'fold',
	),
));
              }			  
		?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'salidaenc_id'); ?>
		<?php echo $form->textField($model,'salidaenc_id',array('readonly'=>true)); ?>
		<?php echo $form->error($model,'salidaenc_id'); ?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'tiposalida_id'); ?>
		<?php //echo $form->textField($model,'tiposalida_id'); ?>
		<?php echo $form->dropDownList($model,'tiposalida_id', CHtml::listData(Tipossalida::model()->findAll(), 'tiposalida_id', 'tiposalida'));?>
  	    <?php echo $form->error($model,'tiposalida_id'); ?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php //echo $form->textField($model,'cliente_id'); ?>
		<?php echo $form->dropDownList($model,'cliente_id', CHtml::listData(Clientes::model()->findAll(), 'cliente_id', 'descripcion')); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>
    </div>
	<div class="alignright">
	<div class="column">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php //echo $form->textField($model,'fecha'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array('model'=>$model,'attribute'=>'fecha','language'=>'es','options'=>array('showAnim'=>'fold','dateFormat'=>'yy-mm-dd',),'htmlOptions'=>array('style'=>'height:20px;','value'=>$fecha,),)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'condcredito_id'); ?>
		<?php //echo $form->textField($model,'condcredito_id'); ?>
		<?php echo $form->dropDownList($model,'condcredito_id', CHtml::listData(Condcredito::model()->findAll(), 'condcredito_id', 'condicion')); ?>
		<?php echo $form->error($model,'condcredito_id'); ?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'vendedor_id'); ?>
		<?php //echo $form->textField($model,'vendedor_id'); ?>
		<?php echo $form->dropDownList($model,'vendedor_id', CHtml::listData(Vendedores::model()->findAll(), 'vendedor_id', 'nombre')); ?>
		<?php echo $form->error($model,'vendedor_id'); ?>
	</div>
    </div>
	</fieldset>
	
	<fieldset>
	<table><tr><td>
	<div class="column">
	<div class="column">
		<?php echo $form->labelEx($model,'bultos'); ?>
		<?php echo $form->textField($model,'bultos'); ?>
		<?php echo $form->error($model,'bultos'); ?>
	</div>
    </td><td>
	<div class="column">
		<?php echo $form->labelEx($model,'unidades'); ?>
		<?php echo $form->textField($model,'unidades'); ?>
		<?php echo $form->error($model,'unidades'); ?>
	</div>
    </td><td>
	<div class="column">
		<?php echo $form->labelEx($model,'docenas'); ?>
		<?php echo $form->textField($model,'docenas'); ?>
		<?php echo $form->error($model,'docenas'); ?>
	</div>
    </div>
	</td></tr></table>
	</fieldset>	
	
	<br>
	<table><tr><td>
	<?php
$url=Yii::app()->request->baseUrl;
echo CHtml::button('Agregar Producto', array(
        'name'=>'Agregar Nuevo Producto',
        'onclick'=>"window.open ('?r=/salidadet_tmp/create', 'carga_producto', config='height=350, width=900, toolbar=no, menubar=no, scrollbars=yes, resizable=no, location=no, directories=no, status=no')"
));
 ?>
 </td>
 <td width="180">

 </td>
 <td>
 <?php
$url=Yii::app()->request->baseUrl;
echo CHtml::button('Crear Nuevo Producto', array(
        'name'=>'Agregar Nuevo Producto',
        'onclick'=>"window.open ('?r=/productos/create', 'crea_producto', config='height=400, width=750, toolbar=no, menubar=no, scrollbars=yes, resizable=no, location=no, directories=no, status=no')"
));
 ?>
 </td></tr></table>
 <br>
 <script type="text/javascript">
function refreshList()
{
$.fn.yiiGridView.update("salidadet-tmp-grid");
}
var interval = setInterval("refreshList()", 6000);
</script>

<?php 
    $tmpsalida = new Salidadet_tmp;
    $this->renderPartial('/salidadet_tmp/admin',array(
	'model'=>$tmpsalida,
)); ?>
 <br>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Grabar Documento' : 'Save'); ?>
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