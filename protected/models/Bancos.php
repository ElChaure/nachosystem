<?php

/**
 * This is the model class for table "bancos".
 *
 * The followings are the available columns in table 'bancos':
 * @property integer $empresa_id
 * @property integer $banco_id
 * @property string $nombre
 * @property string $nro_cuenta
 * @property string $agencia
 * @property string $telefono
 * @property string $contacto
 * @property integer $estatus
 */
class Bancos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bancos the static model class
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
		return 'bancos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, nombre, estatus', 'required'),
			array('empresa_id, estatus', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>30),
			array('nro_cuenta, telefono, contacto', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, banco_id, nombre, nro_cuenta, agencia, telefono, contacto, estatus', 'safe', 'on'=>'search'),
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
		'estado'    => array(self::BELONGS_TO, 'Estatus', 'estatus'),
		'empresa'    => array(self::BELONGS_TO, 'Empresas', 'empresa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empresa_id' => 'Empresa',
			'banco_id' => 'Banco',
			'nombre' => 'Nombre',
			'nro_cuenta' => 'Nro Cuenta',
			'agencia' => 'Agencia',
			'telefono' => 'Telefono',
			'contacto' => 'Contacto',
			'estatus' => 'Estatus',
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
		$criteria->compare('banco_id',$this->banco_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('nro_cuenta',$this->nro_cuenta,true);
		$criteria->compare('agencia',$this->agencia,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('estatus',$this->estatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}