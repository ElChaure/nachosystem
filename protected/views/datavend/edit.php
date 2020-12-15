<?php
$this->breadcrumbs=array(
 'Reporte de Comisiones'=>array('vendedores/admin'),
 'Generar',
);?>
</br>
 </br>
 </br>
<h1><?php //echo $this->id . '/' . $this->action->id; ?>
Datos para la Generacion del Reporte de Comisiones
</h1>
 </br>
 </br>
 </br>
 <p>
 
<?php //$this->pageTitle=Yii::app()->name . ' - Edit Message'; ?>
 <p><?php 
$data->vendedor_id=Yii::app()->getSession()->get('vendedor_id');
$vendedor_id=Yii::app()->getSession()->get('vendedor_id');
$data->fdesde=Yii::app()->getSession()->get('fdesde');
$fdesde=Yii::app()->getSession()->get('fdesde');
$data->fhasta=Yii::app()->getSession()->get('fhasta');
 
 ?> </p>
 
 <p>
 <div class="yiiForm">
 <?php echo CHtml::beginForm(); ?>
 <?php echo CHtml::errorSummary($data); ?>
 <div class="simple">
 <?php echo CHtml::activeLabel($data,'vendedor_id'); ?>
 <?php echo CHtml::activeTextField($data,'vendedor_id'); ?>
 </div>
 </br>
 </br>
 <div class="simple">
 <?php echo CHtml::activeLabel($data,'fdesde'); ?>
 <?php //echo CHtml::activeTextField($data,'fdesde'); ?>
 <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	   array('model'=>$data,
		'attribute'=>'fdesde',
		'language' => 'es',
		'options'=>array(
			'autoSize'=>false,
			'dateFormat'=>'yy-mm-dd',
			'buttonText'=>'Fecha Desde',
			'showAnim'=>'slide',
			'showButtonPanel'=>true,
		),
	)); ?>
 </div>
 </br>
 </br>
 <div class="simple">
 <?php echo CHtml::activeLabel($data,'fhasta'); ?>
 <?php //echo CHtml::activeTextField($data,'fhasta'); ?>
 <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	   array('model'=>$data,
		'attribute'=>'fhasta',
		'language' => 'es',
		'options'=>array(
			'autoSize'=>false,
			'dateFormat'=>'yy-mm-dd',
			'buttonText'=>'Fecha Hasta',
			'showAnim'=>'slide',
			'showButtonPanel'=>true,
		),
	)); ?>
 </div>
  
 <div class="simple">
 </br>
 </br>
 </br>
 </div>
 
 <div class="action">
 <?php echo CHtml::submitButton('Generar Reporte'); ?>
 
 <?php //echo CHtml::button('Regresar', array('onclick' => 'js:document.location.href="index.php?r=vendedores/view&id='.$vendedor_id.'"')); ?>
 
 <?php $vendedor_id=Yii::app()->getSession()->get('vendedor_id');?>
 
 </div>
 <?php echo CHtml::endForm(); ?>
 </div><!-- yiiForm -->
 </p>
</p>