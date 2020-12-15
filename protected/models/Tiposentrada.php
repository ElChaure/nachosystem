<?php

/**
 * This is the model class for table "tiposentrada".
 *
 * The followings are the available columns in table 'tiposentrada':
 * @property integer $tipoentrada_id
 * @property string $tipoentrada
 */
class Tiposentrada extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tiposentrada the static model class
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
		return 'tiposentrada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipoentrada', 'required'),
			array('tipoentrada', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tipoentrada_id, tipoentrada', 'safe', 'on'=>'search'),
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
			'tipoentrada_id' => 'Tipoentrada',
			'tipoentrada' => 'Tipoentrada',
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

		$criteria->compare('tipoentrada_id',$this->tipoentrada_id);
		$criteria->compare('tipoentrada',$this->tipoentrada,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}