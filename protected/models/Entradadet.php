<?php

/**
 * This is the model class for table "entradadet".
 *
 * The followings are the available columns in table 'entradadet':
 * @property integer $entradadet_id
 * @property integer $entradaenc_id
 * @property integer $tipoentrada_id
 * @property integer $producto_id
 * @property integer $unidad_id
 * @property integer $cantidad
 * @property string $precio_unitario
 * @property string $iva
 * @property double $total_neto
 * @property double $total_final
 */
class Entradadet extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entradadet the static model class
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
		return 'entradadet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entradaenc_id, producto_id, unidad_id, tipoentrada_id, cantidad, precio_unitario, iva, total_neto, total_final', 'required'),
			array('entradaenc_id, producto_id, unidad_id, tipoentrada_id, cantidad', 'numerical', 'integerOnly'=>true),
			array('total_neto, total_final', 'numerical'),
			array('precio_unitario', 'length', 'max'=>10),
			array('iva', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('entradadet_id, entradaenc_id, producto_id, unidad_id, cantidad, precio_unitario, iva, total_neto, total_final', 'safe', 'on'=>'search'),
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
			'entradadet_id' => 'Entradadet',
			'entradaenc_id' => 'Entradaenc',
			'tipoentrada_id' => 'Tipo de Entrada',
			'producto_id' => 'Producto',
			'unidad_id' => 'Unidad',
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

		$criteria->compare('entradadet_id',$this->entradadet_id);
		$criteria->compare('entradaenc_id',$this->entradaenc_id);
		$criteria->compare('tipoentrada_id',$this->tipoentrada_id);
		$criteria->compare('producto_id',$this->producto_id);
		$criteria->compare('unidad_id',$this->unidad_id);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('precio_unitario',$this->precio_unitario,true);
		$criteria->compare('iva',$this->iva,true);
		$criteria->compare('total_neto',$this->total_neto);
		$criteria->compare('total_final',$this->total_final);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getTotiva()
        {
                 
                $connection=Yii::app()->db;
                $command=$connection->createCommand("SELECT SUM(total_final)-SUM(total_neto) as totiva FROM `entradadet` where entradaenc_id=".$this->entradaenc_id." and tipoentrada_id=".$this->tipoentrada_id);
                return "IVA: ".$amount = $command->queryScalar();
        }

    public function getTotneto()
        {
                
                
                $connection=Yii::app()->db;
                $command=$connection->createCommand("SELECT SUM(total_neto) as totneto FROM `entradadet` where entradaenc_id=".$this->entradaenc_id." and tipoentrada_id=".$this->tipoentrada_id);
                return "Neto: ".$amount = $command->queryScalar();
        }
		
    public function getTotfinal()
        {
                
                
                $connection=Yii::app()->db;
                $command=$connection->createCommand("SELECT SUM(total_final) as totfinal FROM `entradadet` where entradaenc_id=".$this->entradaenc_id." and tipoentrada_id=".$this->tipoentrada_id);
                return "Total: ".$amount = $command->queryScalar();
        }		
}