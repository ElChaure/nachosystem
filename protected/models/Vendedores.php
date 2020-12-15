<?php

/**
 * This is the model class for table "vendedores".
 *
 * The followings are the available columns in table 'vendedores':
 * @property integer $empresa_id
 * @property integer $vendedor_id
 * @property string $nombre
 * @property string $comision
 *
 * The followings are the available model relations:
 * @property Factenccli[] $factencclis
 */
class Vendedores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vendedores the static model class
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
		return 'vendedores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, nombre', 'required'),
			array('empresa_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>30),
			array('comision', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, vendedor_id, nombre, comision', 'safe', 'on'=>'search'),
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
			'factencclis' => array(self::HAS_MANY, 'Factenccli', 'vendedor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empresa_id' => 'Empresa',
			'vendedor_id' => 'Vendedor',
			'nombre' => 'Nombre',
			'comision' => 'Comision',
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
		$criteria->compare('vendedor_id',$this->vendedor_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('comision',$this->comision,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}