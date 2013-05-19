<?php

/**
 * This is the model class for table "{{heroes}}".
 *
 * The followings are the available columns in table '{{heroes}}':
 * @property string $name
 * @property integer $hero_id
 * @property string $localized_name
 * @property integer $has_items
 *
 * The followings are the available model relations:
 * @property ItemUsedHeroes[] $itemUsedHeroes
 */
class Heroes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Heroes the static model class
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
		return '{{heroes}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hero_id, localized_name', 'required'),
			array('hero_id, has_items', 'numerical', 'integerOnly'=>true),
			array('name, localized_name', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('name, hero_id, localized_name, has_items', 'safe', 'on'=>'search'),
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
			'itemUsedHeroes' => array(self::HAS_MANY, 'ItemUsedHeroes', 'hero_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'name' => 'Name',
			'hero_id' => 'Hero',
			'localized_name' => 'Localized Name',
			'has_items' => 'Has Items',
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

		$criteria->compare('name',$this->name,true);
		$criteria->compare('hero_id',$this->hero_id);
		$criteria->compare('localized_name',$this->localized_name,true);
		$criteria->compare('has_items',$this->has_items);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}