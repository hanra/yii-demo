<?php

/**
 * This is the model class for table "Employee".
 *
 * The followings are the available columns in table 'Employee':
 * @property integer $id
 * @property integer $departmentId
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property integer $ext
 * @property string $hireDate
 * @property string $leaveDate
 *
 * The followings are the available model relations:
 * @property Department $department
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
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
		return 'Employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('departmentId, firstName, lastName, email, hireDate', 'required'),
			array('departmentId, ext', 'numerical', 'integerOnly'=>true),
			array('firstName', 'length', 'max'=>20),
			array('lastName', 'length', 'max'=>40),
			array('email', 'length', 'max'=>60),
			array('leaveDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, departmentId, firstName, lastName, email, ext, hireDate, leaveDate', 'safe', 'on'=>'search'),
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
			'department' => array(self::BELONGS_TO, 'Department', 'departmentId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Employee ID',
			'departmentId' => 'Department',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'email' => 'Email',
			'ext' => 'Ext',
			'hireDate' => 'Hire Date',
			'leaveDate' => 'Leave Date',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('departmentId',$this->departmentId);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ext',$this->ext);
		$criteria->compare('hireDate',$this->hireDate,true);
		$criteria->compare('leaveDate',$this->leaveDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}