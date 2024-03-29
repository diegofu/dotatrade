<?php

/**
 * This is the model class for table "{{rarities}}".
 *
 * The followings are the available columns in table '{{rarities}}':
 * @property string $rarity
 * @property integer $value
 * @property string $loc_key
 * @property string $color
 *
 * The followings are the available model relations:
 * @property Colors $color0
 */
class Rarities extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rarities the static model class
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
		return '{{rarities}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rarity, value, loc_key, color', 'required'),
			array('value', 'numerical', 'integerOnly'=>true),
			array('rarity, loc_key, color', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rarity, value, loc_key, color', 'safe', 'on'=>'search'),
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
			'color0' => array(self::BELONGS_TO, 'Colors', 'color'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rarity' => 'Rarity',
			'value' => 'Value',
			'loc_key' => 'Loc Key',
			'color' => 'Color',
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

		$criteria->compare('rarity',$this->rarity,true);
		$criteria->compare('value',$this->value);
		$criteria->compare('loc_key',$this->loc_key,true);
		$criteria->compare('color',$this->color,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}