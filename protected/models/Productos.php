<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $empresa_id
 * @property integer $producto_id
 * @property string $descripcion
 * @property integer $linea_id
 * @property integer $marca_id
 * @property string $cod_fabricante
 * @property string $costo_prom
 * @property string $ult_costo
 * @property string $pvp
 * @property integer $paga_iva
 * @property integer $existencia
 */
class Productos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Productos the static model class
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
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, producto_id, descripcion, pvp', 'required'),
			array('empresa_id, producto_id, linea_id, marca_id, paga_iva, existencia', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>40),
			array('cod_fabricante, costo_prom, ult_costo, pvp', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, producto_id, descripcion, linea_id, marca_id, cod_fabricante, costo_prom, ult_costo, pvp, paga_iva, existencia', 'safe', 'on'=>'search'),
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
			'producto_id' => 'Producto',
			'descripcion' => 'Descripcion',
			'linea_id' => 'Linea',
			'marca_id' => 'Marca',
			'cod_fabricante' => 'Cod Fabricante',
			'costo_prom' => 'Costo Prom',
			'ult_costo' => 'Ult Costo',
			'pvp' => 'Pvp',
			'paga_iva' => 'Paga Iva',
			'existencia' => 'Existencia',
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
		$criteria->compare('producto_id',$this->producto_id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('linea_id',$this->linea_id);
		$criteria->compare('marca_id',$this->marca_id);
		$criteria->compare('cod_fabricante',$this->cod_fabricante,true);
		$criteria->compare('costo_prom',$this->costo_prom,true);
		$criteria->compare('ult_costo',$this->ult_costo,true);
		$criteria->compare('pvp',$this->pvp,true);
		$criteria->compare('paga_iva',$this->paga_iva);
		$criteria->compare('existencia',$this->existencia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}