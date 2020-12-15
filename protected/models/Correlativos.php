<?php

/**
 * This is the model class for table "correlativos".
 *
 * The followings are the available columns in table 'correlativos':
 * @property integer $empresa_id
 * @property integer $tipoentrada_1
 * @property integer $tipoentrada_2
 * @property integer $tipoentrada_3
 * @property integer $tipoentrada_4
 * @property integer $tipoentrada_5
 * @property integer $tiposalida_10
 * @property integer $tiposalida_11
 * @property integer $tiposalida_12
 * @property integer $tiposalida_13
 * @property integer $tiposalida_14
 * @property integer $tiposalida_15
 * @property integer $iva
 */
class Correlativos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Correlativos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'correlativos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, tipoentrada_1, tipoentrada_2, tipoentrada_3, tipoentrada_4, tipoentrada_5, tiposalida_10, tiposalida_11, tiposalida_12, tiposalida_13, tiposalida_14, tiposalida_15', 'required'),
			array('empresa_id, tipoentrada_1, tipoentrada_2, tipoentrada_3, tipoentrada_4, tipoentrada_5, tiposalida_10, tiposalida_11, tiposalida_12, tiposalida_13, tiposalida_14, tiposalida_15', 'numerical', 'integerOnly'=>true),
			array('iva', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, tipoentrada_1, tipoentrada_2, tipoentrada_3, tipoentrada_4, tipoentrada_5, tiposalida_10, tiposalida_11, tiposalida_12, tiposalida_13, tiposalida_14, tiposalida_15', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empresa_id' => 'Empresa',
			'tipoentrada_1' => 'Prox. Factura de Compra',
			'tipoentrada_2' => 'Prox. Nota de Debito Proveedor',
			'tipoentrada_3' => 'Prox. Ajuste de Entrada',
			'tipoentrada_4' => 'Uso Futuro',
			'tipoentrada_5' => 'Uso Futuro',
			'tiposalida_10' => 'Prox. Factura de Venta',
			'tiposalida_11' => 'Prox. Nota de Credito Cliente',
			'tiposalida_12' => 'Prox. Ajuste de Salida',
			'tiposalida_13' => 'Nota de Entrega',
			'tiposalida_14' => 'Uso Futuro',
			'tiposalida_15' => 'Uso Futuro',
			'iva' => '% I.V.A.',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('empresa_id',$this->empresa_id);
		$criteria->compare('tipoentrada_1',$this->tipoentrada_1);
		$criteria->compare('tipoentrada_2',$this->tipoentrada_2);
		$criteria->compare('tipoentrada_3',$this->tipoentrada_3);
		$criteria->compare('tipoentrada_4',$this->tipoentrada_4);
		$criteria->compare('tipoentrada_5',$this->tipoentrada_5);
		$criteria->compare('tiposalida_10',$this->tiposalida_10);
		$criteria->compare('tiposalida_11',$this->tiposalida_11);
		$criteria->compare('tiposalida_12',$this->tiposalida_12);
		$criteria->compare('tiposalida_13',$this->tiposalida_13);
		$criteria->compare('tiposalida_14',$this->tiposalida_14);
		$criteria->compare('tiposalida_15',$this->tiposalida_15);
		$criteria->compare('iva',$this->iva);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}