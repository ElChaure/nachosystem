<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'salidadet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'selectableRows' => 2,
        'columns'=>array(
        array(
                        'class'=>'CCheckBoxColumn',            
                ),

		//'salidadet_id',
		//'salidaenc_id',
		//'tiposalida_id',
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
		//array(
		//	'class'=>'CButtonColumn',
		//),
	),
)); ?>
