<?php

/**
 * This is the model class for table "salidaenc".
 *
 * The followings are the available columns in table 'salidaenc':
 * @property integer $movimiento_id
 * @property integer $empresa_id
 * @property integer $salidaenc_id
 * @property integer $tiposalida_id
 * @property integer $afectado_id 
 * @property integer $cliente_id
 * @property string $fecha
 * @property string $fecha_pago
 * @property integer $condcredito_id
 * @property integer $vendedor_id
 * @property integer $bultos
 * @property integer $unidades
 * @property integer $docenas
 * @property string  $neto
 * @property string $descuento 
 * @property string  $iva
 * @property string $saldo
 */
class Salidaenc extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Salidaenc the static model class
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
		return 'salidaenc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, salidaenc_id, tiposalida_id, cliente_id, fecha, fecha_pago, condcredito_id, vendedor_id, saldo', 'required'),
			array('empresa_id, salidaenc_id, tiposalida_id, afectado_id,cliente_id, condcredito_id, vendedor_id, bultos, unidades, docenas', 'numerical', 'integerOnly'=>true),
			array('descuento, neto, iva', 'numerical'),  
			array('saldo', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('movimiento_id, empresa_id, salidaenc_id, tiposalida_id, cliente_id, fecha, fecha_pago, condcredito_id, vendedor_id, bultos, unidades, docenas, saldo', 'safe', 'on'=>'search'),
			array('fecha_pago, saldo', 'safe', 'on'=>'update'),
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
		'detalle'    => array(self::HAS_MANY, 'Salidadet', 'salidaenc_id'),
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
			'movimiento_id' => 'Movimiento',
			'empresa_id' => 'Empresa',
			'salidaenc_id' => 'Nro Documento',
			'tiposalida_id' => 'Tiposalida',
			'afectado_id' => 'Nro de Factura NC',
			'cliente_id' => 'Cliente',
			'fecha' => 'Fecha',
			'fecha_pago' => 'Fecha Pago',
			'condcredito_id' => 'Cond Crediticia',
			'vendedor_id' => 'Vendedor',
			'bultos' => 'Bultos',
			'unidades' => 'Unidades',
			'docenas' => 'Docenas',
			'neto' => 'Neto',
			'descuento' => 'Descuento',
			'iva' => '% I.V.A.',			
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

		$criteria->compare('movimiento_id',$this->movimiento_id);
		$criteria->compare('empresa_id',$this->empresa_id);
		$criteria->compare('salidaenc_id',$this->salidaenc_id);
		$criteria->compare('tiposalida_id',$this->tiposalida_id);
		$criteria->compare('afectado_id',$this->afectado_id);
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('fecha_pago',$this->fecha_pago,true);
		$criteria->compare('condcredito_id',$this->condcredito_id);
		$criteria->compare('vendedor_id',$this->vendedor_id);
		$criteria->compare('bultos',$this->bultos);
		$criteria->compare('unidades',$this->unidades);
		$criteria->compare('docenas',$this->docenas);
		$criteria->compare('neto',$this->neto,true);
		$criteria->compare('descuento',$this->descuento,true);
		$criteria->compare('iva',$this->iva,true);		
		$criteria->compare('saldo',$this->saldo,true);
		
		$_SESSION['datos_filtrados'] = new CActiveDataProvider($this, array(
                        'criteria'=>$criteria,
                        //'sort'=>$sort,
                        'pagination'=>false,
                ));

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getTotiva()
        {
                 
                $connection=Yii::app()->db;
                $command=$connection->createCommand("SELECT SUM(total_final)-SUM(total_neto) as totiva FROM `salidadet` where salidaenc_id=".$model->salidaenc_id." and tiposalida_id=".$model->tiposalida_id);
                return "IVA: ".$amount = $command->queryScalar();
        }

    public function getTotneto()
        {
                
                
                $connection=Yii::app()->db;
                $command=$connection->createCommand("SELECT SUM(total_neto) as totneto FROM `salidadet` where salidaenc_id=".$model->salidaenc_id." and tiposalida_id=".$model->tiposalida_id);
                return "Neto: ".$amount = $command->queryScalar();
        }
		
    public function getTotfinal()
        {
                
                
                $connection=Yii::app()->db;
                $command=$connection->createCommand("SELECT SUM(total_final) as totfinal FROM `salidadet` where salidaenc_id=".$model->salidaenc_id." and tiposalida_id=".$model->tiposalida_id);
                return "Total: ".$amount = $command->queryScalar();
        }
	
	
}