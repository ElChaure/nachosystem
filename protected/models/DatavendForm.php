<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class DatavendForm extends CFormModel
{
	public $vendedor_id;
	public $fdesde;
	public $fhasta;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('vendedor_id, fdesde, fhasta', 'required'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'vendedor_id'=>'Vendedor',
			'fdesde'=>'Fecha Desde',
			'fhasta'=>'Fecha Hasta',
		);
	}
}