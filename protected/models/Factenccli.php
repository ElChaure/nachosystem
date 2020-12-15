<?php

/**
 * This is the model class for table "factenccli".
 *
 * The followings are the available columns in table 'factenccli':
 * @property integer $empresa_id
 * @property integer $factura_id
 * @property integer $cliente_id
 * @property string $direccion
 * @property integer $vendedor_id
 * @property integer $condcredito_id
 * @property string $fecha_emision
 * @property string $fecha_pago
 * @property integer $bultos
 * @property integer $unidades
 * @property integer $docenas
 * @property string $observaciones
 */
class Factenccli extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Factenccli the static model class
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
		return 'factenccli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, factura_id, cliente_id, vendedor_id, condcredito_id, fecha_emision', 'required'),
			array('empresa_id, factura_id, cliente_id, vendedor_id, condcredito_id, bultos, unidades, docenas', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>90),
			array('direccion, fecha_pago', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, factura_id, cliente_id, direccion, vendedor_id, condcredito_id, fecha_emision, fecha_pago, bultos, unidades, docenas, observaciones', 'safe', 'on'=>'search'),
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
			'factura_id' => 'Factura',
			'cliente_id' => 'Cliente',
			'direccion' => 'Direccion',
			'vendedor_id' => 'Vendedor',
			'condcredito_id' => 'Condcredito',
			'fecha_emision' => 'Fecha Emision',
			'fecha_pago' => 'Fecha Pago',
			'bultos' => 'Bultos',
			'unidades' => 'Unidades',
			'docenas' => 'Docenas',
			'observaciones' => 'Observaciones',
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
		$criteria->compare('factura_id',$this->factura_id);
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('vendedor_id',$this->vendedor_id);
		$criteria->compare('condcredito_id',$this->condcredito_id);
		$criteria->compare('fecha_emision',$this->fecha_emision,true);
		$criteria->compare('fecha_pago',$this->fecha_pago,true);
		$criteria->compare('bultos',$this->bultos);
		$criteria->compare('unidades',$this->unidades);
		$criteria->compare('docenas',$this->docenas);
		$criteria->compare('observaciones',$this->observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}