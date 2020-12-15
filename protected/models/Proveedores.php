<?php

/**
 * This is the model class for table "proveedores".
 *
 * The followings are the available columns in table 'proveedores':
 * @property integer $empresa_id
 * @property integer $proveedor_id
 * @property string $descripcion
 * @property string $rif
 * @property string $direccion
 * @property string $telefono
 * @property string $fax
 * @property string $contacto
 * @property string $ult_compra
 * @property integer $condcredito_id
 * @property string $credito_limite
 */
class Proveedores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proveedores the static model class
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
		return 'proveedores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, descripcion', 'required'),
			array('empresa_id, condcredito_id', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>60),
			array('rif, credito_limite', 'length', 'max'=>15),
			array('telefono, fax, contacto', 'length', 'max'=>30),
			array('direccion, ult_compra', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, proveedor_id, descripcion, rif, direccion, telefono, fax, contacto, ult_compra, condcredito_id, credito_limite', 'safe', 'on'=>'search'),
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
			'proveedor_id' => 'Proveedor',
			'descripcion' => 'Descripcion',
			'rif' => 'Rif',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'fax' => 'Fax',
			'contacto' => 'Contacto',
			'ult_compra' => 'Ult Compra',
			'condcredito_id' => 'Condcredito',
			'credito_limite' => 'Credito Limite',
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
		$criteria->compare('proveedor_id',$this->proveedor_id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('rif',$this->rif,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('ult_compra',$this->ult_compra,true);
		$criteria->compare('condcredito_id',$this->condcredito_id);
		$criteria->compare('credito_limite',$this->credito_limite,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}