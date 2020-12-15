<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'entradadet-tmp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'entradadet_id',
		//'entradaenc_id',
		array(
                   'name'=>'producto_id',
                   'value'=>'$data->producto->descripcion',
                   'filter' => CHtml::listData(Productos::model()->findAll(), 'producto_id', 'descripcion'),
         ),
		array(
       'name'=>'unidad_id',
                   'value'=>'$data->unidad->unidad',
                   'filter' => CHtml::listData(Unidades::model()->findAll(), 'unidad_id', 'unidad'),
         ),
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

		array(
			'class'=>'CButtonColumn',
                        'header'=>'Quitar',
                        'deleteButtonUrl' => 'Yii::app()->createUrl("entradadet_tmp/delete",array("id"=>$data["entradadet_id"]))',
                        'template'=>'{delete}',

		),
	),
)); ?>
