<?php

/**
 * This is the model class for table "entradaenc_tmp".
 *
 * The followings are the available columns in table 'entradaenc_tmp':
 * @property integer $empresa_id
 * @property integer $entradaenc_id
 * @property integer $tipoentrada_id
 * @property integer $proveedor_id
 * @property string $fecha
 * @property integer $condcredito_id
 * @property integer $vendedor_id
 * @property integer $bultos
 * @property integer $unidades
 * @property integer $docenas
 */
class Entradaenc_tmp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entradaenc_tmp the static model class
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
		return 'entradaenc_tmp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, entradaenc_id, tipoentrada_id, proveedor_id, fecha, condcredito_id, vendedor_id', 'required'),
			array('empresa_id, entradaenc_id, tipoentrada_id, proveedor_id, condcredito_id, vendedor_id, bultos, unidades, docenas', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, entradaenc_id, tipoentrada_id, proveedor_id, fecha, condcredito_id, vendedor_id, bultos, unidades, docenas', 'safe', 'on'=>'search'),
			
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
		
		'empresa'    => array(self::BELONGS_TO, 'Empresas', 'empresa_id'),
		'detalle'    => array(self::HAS_MANY, 'Entradadet_tmp', 'entradaenc_id'),
		'tipoentrada'    => array(self::BELONGS_TO, 'Tiposentrada', 'tipoentrada_id'),
		'proveedor'    => array(self::BELONGS_TO, 'Proveedores', 'proveedor_id'),
		'condcredito'    => array(self::BELONGS_TO, 'Condcredito', 'condcredito_id'),
		'vendedor'    => array(self::BELONGS_TO, 'Vendedores', 'vendedor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empresa_id' => 'Empresa',
			'entradaenc_id' => 'Nro Documento',
			'tipoentrada_id' => 'Tipo de Entrada',
			'proveedor_id' => 'Proveedor',
			'fecha' => 'Fecha Emision',
			'condcredito_id' => 'Condicion Crediticia',
			'vendedor_id' => 'Vendedor',
			'bultos' => 'Bultos',
			'unidades' => 'Unidades',
			'docenas' => 'Docenas',
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
		$criteria->compare('entradaenc_id',$this->entradaenc_id);
		$criteria->compare('tipoentrada_id',$this->tipoentrada_id);
		$criteria->compare('proveedor_id',$this->proveedor_id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('condcredito_id',$this->condcredito_id);
		$criteria->compare('vendedor_id',$this->vendedor_id);
		$criteria->compare('bultos',$this->bultos);
		$criteria->compare('unidades',$this->unidades);
		$criteria->compare('docenas',$this->docenas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}