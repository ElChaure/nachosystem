<?php

/**
 * This is the model class for table "kardex".
 *
 * The followings are the available columns in table 'kardex':
 * @property integer $producto_id
 * @property integer $documento_id
 * @property integer $ente_id
 * @property string $fecha
 * @property integer $tipomovimiento_id
 * @property integer $cantidad
 * @property string $precio_unitario
 * @property string $iva
 * @property double $total_neto
 * @property double $total_final
 */
class Kardex extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kardex the static model class
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
		return 'kardex';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('producto_id, documento_id, ente_id, tipomovimiento_id, cantidad', 'numerical', 'integerOnly'=>true),
			array('total_neto, total_final', 'numerical'),
			array('precio_unitario', 'length', 'max'=>10),
			array('iva', 'length', 'max'=>5),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('producto_id, documento_id, ente_id, fecha, tipomovimiento_id, cantidad, precio_unitario, iva, total_neto, total_final', 'safe', 'on'=>'search'),
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
			'producto_id' => 'Producto',
			'documento_id' => 'Documento',
			'ente_id' => 'Ente',
			'fecha' => 'Fecha',
			'tipomovimiento_id' => 'Tipomovimiento',
			'cantidad' => 'Cantidad',
			'precio_unitario' => 'Precio Unitario',
			'iva' => 'Iva',
			'total_neto' => 'Total Neto',
			'total_final' => 'Total Final',
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

		$criteria->compare('producto_id',$this->producto_id);
		$criteria->compare('documento_id',$this->documento_id);
		$criteria->compare('ente_id',$this->ente_id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('tipomovimiento_id',$this->tipomovimiento_id);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('precio_unitario',$this->precio_unitario,true);
		$criteria->compare('iva',$this->iva,true);
		$criteria->compare('total_neto',$this->total_neto);
		$criteria->compare('total_final',$this->total_final);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}