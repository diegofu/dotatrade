<?php

/**
 * This is the model class for table "{{itemset_items}}".
 *
 * The followings are the available columns in table '{{itemset_items}}':
 * @property integer $item_set_id
 * @property integer $item_id
 *
 * The followings are the available model relations:
 * @property ItemSets $itemSet
 * @property Items $item
 */
class ItemsetItems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ItemsetItems the static model class
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
		return '{{itemset_items}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_set_id, item_id', 'required'),
			array('item_set_id, item_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('item_set_id, item_id', 'safe', 'on'=>'search'),
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
			'itemSet' => array(self::BELONGS_TO, 'ItemSets', 'item_set_id'),
			'item' => array(self::BELONGS_TO, 'Items', 'item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'item_set_id' => 'Item Set',
			'item_id' => 'Item',
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

		$criteria->compare('item_set_id',$this->item_set_id);
		$criteria->compare('item_id',$this->item_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}