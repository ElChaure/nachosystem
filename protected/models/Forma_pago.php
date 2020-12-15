<?php

/**
 * This is the model class for table "forma_pago".
 *
 * The followings are the available columns in table 'forma_pago':
 * @property integer $forma_pago_id
 * @property string $forma_pago
 */
class Forma_pago extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Forma_pago the static model class
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
		return 'forma_pago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('forma_pago_id, forma_pago', 'required'),
			array('forma_pago_id', 'numerical', 'integerOnly'=>true),
			array('forma_pago', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('forma_pago_id, forma_pago', 'safe', 'on'=>'search'),
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
			'forma_pago_id' => 'Forma Pago',
			'forma_pago' => 'Forma Pago',
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

		$criteria->compare('forma_pago_id',$this->forma_pago_id);
		$criteria->compare('forma_pago',$this->forma_pago,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}