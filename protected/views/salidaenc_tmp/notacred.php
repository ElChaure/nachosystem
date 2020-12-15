<h1>Factura de Afectacion</h1>

<?php if(Yii::app() -> user -> hasFlash('mensajeEstado')):?>
<div style="color: #0000FF">
	<?php echo Yii::app() -> user -> getFlash('mensajeEstado'); ?>
</div>
<?php endif; ?>

<h2>Numero de Factura</h2>

<?php //echo CHtml::beginForm(CHtml::normalizeUrl(array('adminUsuario/index')), 'post'); ?>  

<div class='formulario'>  

		<?php echo CHtml::errorSummary($notacredForm); ?>  

		<table>
			<tr>
				<td><?php echo CHtml::activeLabel($notacredForm, 'salidaenc_id'); ?></td>
				<td><?php echo CHtml::activeTextField($notacredForm, 'salidaenc_id'); ?> </td>
			</tr>
		
		</table>

		<br />

		<div class='acciones'>  
			<?php echo CHtml::submitButton('Buscar', array('id' => 'enviar')); ?>  
		</div>  
  
</div>  

<?php echo CHtml::endForm(); ?>

