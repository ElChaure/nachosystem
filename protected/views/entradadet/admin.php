<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'entradadet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'entradadet_id',
		//'entradaenc_id',
		//'tipoentrada_id',
		'producto_id',
		'unidad_id',
		'cantidad',
		'precio_unitario',
		array(
                'name'=>'iva',
                'type'=>'text',
                'footer'=>$model->getTotiva(),
        ),
		
		array(
                'name'=>'total_neto',
                'type'=>'text',
                'footer'=>$model->getTotneto(),
        ),
		array(
                'name'=>'total_final',
                'type'=>'text',
                'footer'=>$model->getTotfinal(),
        ),
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
