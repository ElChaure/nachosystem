<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $empresa_id
 * @property integer $cliente_id
 * @property string $descripcion
 * @property string $rif
 * @property string $direccion
 * @property string $telefono
 * @property string $fax
 * @property string $contacto
 * @property string $ult_venta
 * @property integer $condcredito_id
 * @property string $credito_limite
 *
 * The followings are the available model relations:
 * @property Factenccli[] $factencclis
 * @property Pagocliente[] $pagoclientes
 */
class Clientes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clientes the static model class
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
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, cliente_id, descripcion', 'required'),
			array('empresa_id, condcredito_id', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>60),
			array('rif, credito_limite', 'length', 'max'=>15),
			array('telefono, fax, contacto', 'length', 'max'=>30),
			array('direccion, ult_venta', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, cliente_id, descripcion, rif, direccion, telefono, fax, contacto, ult_venta, condcredito_id, credito_limite', 'safe', 'on'=>'search'),
			array('empresa_id, cliente_id, descripcion', 'safe', 'on'=>'create'),
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
			'factencclis' => array(self::HAS_MANY, 'Factenccli', 'cliente_id'),
			'pagoclientes' => array(self::HAS_MANY, 'Pagocliente', 'cliente_id'),
		    'empresa'    => array(self::BELONGS_TO, 'Empresas', 'empresa_id'),
			'condcredito'    => array(self::BELONGS_TO, 'Condcredito', 'condcredito_id'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empresa_id' => 'Empresa',
			'cliente_id' => 'Cliente',
			'descripcion' => 'Nombre del Cliente',
			'rif' => 'Rif',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'fax' => 'Fax',
			'contacto' => 'Contacto',
			'ult_venta' => 'Ult Venta',
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
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('rif',$this->rif,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('ult_venta',$this->ult_venta,true);
		$criteria->compare('condcredito_id',$this->condcredito_id);
		$criteria->compare('credito_limite',$this->credito_limite,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}