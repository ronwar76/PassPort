<?php

/**
 * This is the model class for table "passwords".
 *
 * The followings are the available columns in table 'passwords':
 * @property integer $id
 * @property string $association
 * @property string $username
 * @property string $password
 * @property string $DateCreated
 * @property string $LastUpdate
 * @property integer $users_id
 *
 * The followings are the available model relations:
 * @property Users $users
 */
class Passwords extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'passwords';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('association, username, password, DateCreated, users_id', 'required'),
			array('users_id', 'numerical', 'integerOnly'=>true),
			array('association, username, password', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, association, username, password, DateCreated, LastUpdate, users_id', 'safe', 'on'=>'search'),
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
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'association' => 'Association',
			'username' => 'Username',
			'password' => 'Password',
			'DateCreated' => 'Date Created',
			'LastUpdate' => 'Last Update',
			'users_id' => 'Users',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		$record = Users::model()->findByAttributes(array('username'=>Yii::app()->user->name));
		
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('association',$this->association,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('LastUpdate',$this->LastUpdate,true);
		$criteria->compare('users_id',$record->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Passwords the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
