<?php

/**
 * This is the model class for table "{{prefabs}}".
 *
 * The followings are the available columns in table '{{prefabs}}':
 * @property string $name
 * @property string $item_class
 * @property string $item_type_name
 * @property string $item_slot
 * @property string $item_rarity
 * @property integer $min_ilevel
 * @property integer $max_ilevel
 * @property string $item_set
 */
class Prefabs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prefabs the static model class
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
		return '{{prefabs}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('min_ilevel, max_ilevel', 'numerical', 'integerOnly'=>true),
			array('name, item_class, item_type_name, item_slot, item_rarity, item_set', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('name, item_class, item_type_name, item_slot, item_rarity, min_ilevel, max_ilevel, item_set', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'item_class' => 'Item Class',
			'item_type_name' => 'Item Type Name',
			'item_slot' => 'Item Slot',
			'item_rarity' => 'Item Rarity',
			'min_ilevel' => 'Min Ilevel',
			'max_ilevel' => 'Max Ilevel',
			'item_set' => 'Item Set',
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
		$criteria->compare('item_class',$this->item_class,true);
		$criteria->compare('item_type_name',$this->item_type_name,true);
		$criteria->compare('item_slot',$this->item_slot,true);
		$criteria->compare('item_rarity',$this->item_rarity,true);
		$criteria->compare('min_ilevel',$this->min_ilevel);
		$criteria->compare('max_ilevel',$this->max_ilevel);
		$criteria->compare('item_set',$this->item_set,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}