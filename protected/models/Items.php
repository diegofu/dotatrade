<?php

/**
 * This is the model class for table "{{items}}".
 *
 * The followings are the available columns in table '{{items}}':
 * @property integer $id
 * @property string $name
 * @property string $prefab
 * @property string $item_type_name
 * @property string $item_name
 * @property string $item_slot
 * @property string $item_rarity
 * @property string $item_description
 * @property string $item_set
 * @property string $item_store_description
 * @property string $image_url
 *
 * The followings are the available model relations:
 * @property ItemUsedHeroes $itemUsedHeroes
 * @property Prefabs $prefab0
 * @property ItemsetItems[] $itemsetItems
 * @property PlayerItems[] $playerItems
 */
class Items extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Items the static model class
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
		return '{{items}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('name, prefab, item_type_name, item_name, item_slot, item_rarity, item_description, item_set', 'length', 'max'=>128),
			array('item_store_description, image_url', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, prefab, item_type_name, item_name, item_slot, item_rarity, item_description, item_set, item_store_description, image_url', 'safe', 'on'=>'search'),
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
			'itemUsedHeroes' => array(self::HAS_ONE, 'ItemUsedHeroes', 'id'),
			'prefab0' => array(self::BELONGS_TO, 'Prefabs', 'prefab'),
			'rarity0' => array(self::BELONGS_TO, 'Rarities', 'item_rarity'),
			'itemsetItems' => array(self::HAS_MANY, 'ItemsetItems', 'item_id'),
			'playerItems' => array(self::HAS_MANY, 'PlayerItems', 'defindex'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'prefab' => 'Prefab',
			'item_type_name' => 'Item Type Name',
			'item_name' => 'Item Name',
			'item_slot' => 'Item Slot',
			'item_rarity' => 'Item Rarity',
			'item_description' => 'Item Description',
			'item_set' => 'Item Set',
			'item_store_description' => 'Item Store Description',
			'image_url' => 'Image Url',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('prefab',$this->prefab,true);
		$criteria->compare('item_type_name',$this->item_type_name,true);
		$criteria->compare('item_name',$this->item_name,true);
		$criteria->compare('item_slot',$this->item_slot,true);
		$criteria->compare('item_rarity',$this->item_rarity,true);
		$criteria->compare('item_description',$this->item_description,true);
		$criteria->compare('item_set',$this->item_set,true);
		$criteria->compare('item_store_description',$this->item_store_description,true);
		$criteria->compare('image_url',$this->image_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}