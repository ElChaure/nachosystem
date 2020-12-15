<?php

/**
 * This is the model class for table "factdetclli".
 *
 * The followings are the available columns in table 'factdetclli':
 * @property integer $factdet_id
 * @property integer $factura_id
 * @property integer $producto_id
 * @property string $cantidad
 * @property integer $unidad_id
 * @property string $precio_venta
 */
class Factdetclli extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Factdetclli the static model class
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
		return 'factdetclli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('factura_id, producto_id, cantidad, unidad_id, precio_venta', 'required'),
			array('factura_id, producto_id, unidad_id', 'numerical', 'integerOnly'=>true),
			array('cantidad, precio_venta', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('factdet_id, factura_id, producto_id, cantidad, unidad_id, precio_venta', 'safe', 'on'=>'search'),
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
			'factdet_id' => 'Factdet',
			'factura_id' => 'Factura',
			'producto_id' => 'Producto',
			'cantidad' => 'Cantidad',
			'unidad_id' => 'Unidad',
			'precio_venta' => 'Precio Venta',
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

		$criteria->compare('factdet_id',$this->factdet_id);
		$criteria->compare('factura_id',$this->factura_id);
		$criteria->compare('producto_id',$this->producto_id);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('unidad_id',$this->unidad_id);
		$criteria->compare('precio_venta',$this->precio_venta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}