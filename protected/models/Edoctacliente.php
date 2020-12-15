<?php

/**
 * This is the model class for table "edoctacliente".
 *
 * The followings are the available columns in table 'edoctacliente':
 * @property integer $empresa_id
 * @property integer $cliente_id
 * @property integer $movimiento_id
 * @property string $tiposalida
 * @property string $documento_nro
 * @property string $fecha
 * @property double $monto
 * @property double $saldo
 */
class Edoctacliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Edoctacliente the static model class
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
		return 'edoctacliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, cliente_id, movimiento_id', 'numerical', 'integerOnly'=>true),
			array('monto, saldo', 'numerical'),
			array('tiposalida', 'length', 'max'=>30),
			array('documento_nro', 'length', 'max'=>20),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, cliente_id, movimiento_id, tiposalida, documento_nro, fecha, monto, saldo', 'safe', 'on'=>'search'),
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
			'cliente_id' => 'Cliente',
			'movimiento_id' => 'Movimiento',
			'tiposalida' => 'Tiposalida',
			'documento_nro' => 'Documento Nro',
			'fecha' => 'Fecha',
			'monto' => 'Monto',
			'saldo' => 'Saldo',
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
		$criteria->compare('movimiento_id',$this->movimiento_id);
		$criteria->compare('tiposalida',$this->tiposalida,true);
		$criteria->compare('documento_nro',$this->documento_nro,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('saldo',$this->saldo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}