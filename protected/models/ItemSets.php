<?php

/**
 * This is the model class for table "{{item_sets}}".
 *
 * The followings are the available columns in table '{{item_sets}}':
 * @property string $item_set
 * @property string $name
 * @property string $store_bundle
 *
 * The followings are the available model relations:
 * @property Items[] $tblItems
 */
class ItemSets extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ItemSets the static model class
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
		return '{{item_sets}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_set', 'required'),
			array('item_set, name, store_bundle', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('item_set, name, store_bundle', 'safe', 'on'=>'search'),
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
			'tblItems' => array(self::MANY_MANY, 'Items', '{{item_set_items}}(item_set, name)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'item_set' => 'Item Set',
			'name' => 'Name',
			'store_bundle' => 'Store Bundle',
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

		$criteria->compare('item_set',$this->item_set,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('store_bundle',$this->store_bundle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}