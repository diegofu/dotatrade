<?php

/**
 * This is the model class for table "{{player_items}}".
 *
 * The followings are the available columns in table '{{player_items}}':
 * @property string $id
 * @property string $player_id
 * @property string $original_id
 * @property integer $defindex
 * @property integer $level
 * @property integer $quality
 * @property string $inventory
 * @property string $quantity
 * @property integer $equipped
 *
 * The followings are the available model relations:
 * @property Items $defindex0
 * @property Players $player
 */
class PlayerItems extends CActiveRecord
{
	/*
	 * Quality of items
	 *
	 *
	 */
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PlayerItems the static model class
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
		return '{{player_items}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('defindex, level, quality, equipped', 'numerical', 'integerOnly'=>true),
			array('id, player_id, original_id', 'length', 'max'=>20),
			array('inventory, quantity', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, player_id, original_id, defindex, level, quality, inventory, quantity, equipped', 'safe', 'on'=>'search'),
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
			'defindex0' => array(self::BELONGS_TO, 'Items', 'defindex'),
			'player' => array(self::BELONGS_TO, 'Players', 'player_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'player_id' => 'Player',
			'original_id' => 'Original',
			'defindex' => 'Defindex',
			'level' => 'Level',
			'quality' => 'Quality',
			'inventory' => 'Inventory',
			'quantity' => 'Quantity',
			'equipped' => 'Equipped',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('player_id',$this->player_id,true);
		$criteria->compare('original_id',$this->original_id,true);
		$criteria->compare('defindex',$this->defindex);
		$criteria->compare('level',$this->level);
		$criteria->compare('quality',$this->quality);
		$criteria->compare('inventory',$this->inventory,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('equipped',$this->equipped);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}