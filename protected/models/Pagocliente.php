<?php

/**
 * This is the model class for table "pagocliente".
 *
 * The followings are the available columns in table 'pagocliente':
 * @property integer $empresa_id
 * @property integer $pagocli_id
 * @property integer $cliente_id
 * @property integer $forma_pago_id
 * @property integer $movimiento_id
 * @property string $documento_nro
 * @property string $fecha_pago
 * @property double $monto
 */
class Pagocliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pagocliente the static model class
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
		return 'pagocliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, cliente_id, forma_pago_id, movimiento_id, fecha_pago, monto', 'required'),
			array('empresa_id, cliente_id, forma_pago_id, movimiento_id', 'numerical', 'integerOnly'=>true),
			array('monto', 'numerical'),
			array('documento_nro', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, pagocli_id, cliente_id, forma_pago_id, movimiento_id, documento_nro, fecha_pago, monto', 'safe', 'on'=>'search'),
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
			'pagocli_id' => 'Pagocli',
			'cliente_id' => 'Cliente',
			'forma_pago_id' => 'Forma Pago',
			'movimiento_id' => 'Movimiento',
			'documento_nro' => 'Documento Nro',
			'fecha_pago' => 'Fecha Pago',
			'monto' => 'Monto',
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
		$criteria->compare('pagocli_id',$this->pagocli_id);
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('forma_pago_id',$this->forma_pago_id);
		$criteria->compare('movimiento_id',$this->movimiento_id);
		$criteria->compare('documento_nro',$this->documento_nro,true);
		$criteria->compare('fecha_pago',$this->fecha_pago,true);
		$criteria->compare('monto',$this->monto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}