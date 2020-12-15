<?php

/**
 * This is the model class for table "empresas".
 *
 * The followings are the available columns in table 'empresas':
 * @property integer $empresa_id
 * @property string $nombre
 * @property string $rif
 * @property string $direccion
 * @property string $representante
 * @property integer $mes_inicio
 * @property integer $anio_fiscal
 */
class Empresas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Empresas the static model class
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
		return 'empresas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			array('mes_inicio, anio_fiscal', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>60),
			array('rif', 'length', 'max'=>20),
			array('representante', 'length', 'max'=>30),
			array('direccion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, nombre, rif, direccion, representante, mes_inicio, anio_fiscal', 'safe', 'on'=>'search'),
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
			'empresa_id' => 'Id Empresa',
			'nombre' => 'Empresa',
			'rif' => 'RIF',
			'direccion' => 'Direccion',
			'representante' => 'Representante',
			'mes_inicio' => 'Mes Inicio',
			'anio_fiscal' => 'Anio Fiscal',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('rif',$this->rif,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('representante',$this->representante,true);
		$criteria->compare('mes_inicio',$this->mes_inicio);
		$criteria->compare('anio_fiscal',$this->anio_fiscal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}