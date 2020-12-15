<?php

/**
 * This is the model class for table "analisisvencimientocli".
 *
 * The followings are the available columns in table 'analisisvencimientocli':
 * @property integer $CODIGO
 * @property string $NOMBRE_CLIENTE
 * @property string $A_15_DIAS
 * @property string $A_30_DIAS
 * @property string $A_45_DIAS
 * @property string $A_60_DIAS
 * @property string $A_90_DIAS
 * @property string $MAS_90_DIAS
 */
class Analisisvencimientocli extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Analisisvencimientocli the static model class
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
		return 'analisisvencimientocli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CODIGO, NOMBRE_CLIENTE', 'required'),
			array('CODIGO', 'numerical', 'integerOnly'=>true),
			array('NOMBRE_CLIENTE', 'length', 'max'=>60),
			array('A_15_DIAS, A_30_DIAS, A_45_DIAS, A_60_DIAS, A_90_DIAS, MAS_90_DIAS', 'length', 'max'=>54),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CODIGO, NOMBRE_CLIENTE, A_15_DIAS, A_30_DIAS, A_45_DIAS, A_60_DIAS, A_90_DIAS, MAS_90_DIAS', 'safe', 'on'=>'search'),
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
			'CODIGO' => 'Codigo',
			'NOMBRE_CLIENTE' => 'Nombre Cliente',
			'A_15_DIAS' => 'A 15 Dias',
			'A_30_DIAS' => 'A 30 Dias',
			'A_45_DIAS' => 'A 45 Dias',
			'A_60_DIAS' => 'A 60 Dias',
			'A_90_DIAS' => 'A 90 Dias',
			'MAS_90_DIAS' => 'Mas 90 Dias',
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

		$criteria->compare('CODIGO',$this->CODIGO);
		$criteria->compare('NOMBRE_CLIENTE',$this->NOMBRE_CLIENTE,true);
		$criteria->compare('A_15_DIAS',$this->A_15_DIAS,true);
		$criteria->compare('A_30_DIAS',$this->A_30_DIAS,true);
		$criteria->compare('A_45_DIAS',$this->A_45_DIAS,true);
		$criteria->compare('A_60_DIAS',$this->A_60_DIAS,true);
		$criteria->compare('A_90_DIAS',$this->A_90_DIAS,true);
		$criteria->compare('MAS_90_DIAS',$this->MAS_90_DIAS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}