<?php

/**
 * This is the model class for table "{{players}}".
 *
 * The followings are the available columns in table '{{players}}':
 * @property string $steamid
 * @property integer $communityvisibilitystate
 * @property integer $profilestate
 * @property string $personaname
 * @property integer $lastlogoff
 * @property string $profileurl
 * @property string $avatar
 * @property string $avatarmedium
 * @property string $avatarfull
 * @property integer $personastate
 * @property string $primaryclanid
 * @property integer $timecreated
 */
class Players extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Players the static model class
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
		return '{{players}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('steamid', 'required'),
			array('communityvisibilitystate, profilestate, lastlogoff, personastate, timecreated', 'numerical', 'integerOnly'=>true),
			array('steamid', 'length', 'max'=>20),
			array('personaname, profileurl, avatar, avatarmedium, avatarfull, primaryclanid', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('steamid, communityvisibilitystate, profilestate, personaname, lastlogoff, profileurl, avatar, avatarmedium, avatarfull, personastate, primaryclanid, timecreated', 'safe', 'on'=>'search'),
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
			'steamid' => 'Steamid',
			'communityvisibilitystate' => 'Communityvisibilitystate',
			'profilestate' => 'Profilestate',
			'personaname' => 'Personaname',
			'lastlogoff' => 'Lastlogoff',
			'profileurl' => 'Profileurl',
			'avatar' => 'Avatar',
			'avatarmedium' => 'Avatarmedium',
			'avatarfull' => 'Avatarfull',
			'personastate' => 'Personastate',
			'primaryclanid' => 'Primaryclanid',
			'timecreated' => 'Timecreated',
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

		$criteria->compare('steamid',$this->steamid,true);
		$criteria->compare('communityvisibilitystate',$this->communityvisibilitystate);
		$criteria->compare('profilestate',$this->profilestate);
		$criteria->compare('personaname',$this->personaname,true);
		$criteria->compare('lastlogoff',$this->lastlogoff);
		$criteria->compare('profileurl',$this->profileurl,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('avatarmedium',$this->avatarmedium,true);
		$criteria->compare('avatarfull',$this->avatarfull,true);
		$criteria->compare('personastate',$this->personastate);
		$criteria->compare('primaryclanid',$this->primaryclanid,true);
		$criteria->compare('timecreated',$this->timecreated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}