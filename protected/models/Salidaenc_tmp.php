<?php

/**
 * This is the model class for table "salidaenc_tmp".
 *
 * The followings are the available columns in table 'salidaenc_tmp':
 * @property integer $empresa_id
 * @property integer $salidaenc_id
 * @property integer $tiposalida_id
 * @property integer $afectado_id 
 * @property integer $cliente_id
 * @property string $fecha
 * @property integer $condcredito_id
 * @property integer $vendedor_id
 * @property integer $bultos
 * @property integer $unidades
 * @property integer $docenas
 * @property string $descuento
 
 */
class Salidaenc_tmp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Salidaenc_tmp the static model class
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
		return 'salidaenc_tmp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, salidaenc_id, tiposalida_id, cliente_id, fecha, condcredito_id, vendedor_id', 'required'),
			array('empresa_id, salidaenc_id, tiposalida_id, afectado_id, cliente_id, condcredito_id, vendedor_id, bultos, unidades, docenas', 'numerical', 'integerOnly'=>true),
			array('descuento', 'numerical'),  
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresa_id, salidaenc_id, tiposalida_id, cliente_id, fecha, condcredito_id, vendedor_id, bultos, unidades, docenas', 'safe', 'on'=>'search'),
			array('afectado_id', 'safe', 'on'=>'create'),
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
		'detalle'    => array(self::HAS_MANY, 'Salidadet_tmp', 'salidaenc_id'),
		'tiposalida'    => array(self::BELONGS_TO, 'Tipossalida', 'tiposalida_id'),
		'cliente'    => array(self::BELONGS_TO, 'Clientes', 'cliente_id'),
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
			'salidaenc_id' => 'Nro Documento',
			'tiposalida_id' => 'Tipo de Salida',
			'afectado_id' => 'Nro de Factura NC',
			'cliente_id' => 'Cliente',
			'fecha' => 'Fecha Emision',
			'condcredito_id' => 'Condicion Crediticia',
			'vendedor_id' => 'Vendedor',
			'bultos' => 'Bultos',
			'unidades' => 'Unidades',
			'docenas' => 'Docenas',
			'descuento' => 'Descuento',	
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
		$criteria->compare('salidaenc_id',$this->salidaenc_id);
		$criteria->compare('tiposalida_id',$this->tiposalida_id);
        $criteria->compare('afectado_id',$this->afectado_id);		
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('condcredito_id',$this->condcredito_id);
		$criteria->compare('vendedor_id',$this->vendedor_id);
		$criteria->compare('bultos',$this->bultos);
		$criteria->compare('unidades',$this->unidades);
		$criteria->compare('docenas',$this->docenas);
        $criteria->compare('descuento',$this->descuento);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}