<?php

class NotacredForm extends CFormModel  
{  
	public $salidaenc_id;  
	
	public function rules()  
	{  
		return array (  
			array('salidaenc_id', 'required'),  
			array('salidaenc_id', 'numerical', 'integerOnly' => true),
		);  
	}  
	
	public function attributeLabels()  
	{  
		return array(  
			'salidaenc_id'    => 'Nro. Factura',  
		);  
	}  
}  

?>
