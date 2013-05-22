<?php

class InventoryController extends Controller
{

	public function actionIndex()
	{
		$items = NULL;
		if(Yii::app()->user->getState('steamID') != NULL) {
			$steamID = Yii::app()->user->getState('steamID');
			$items = parent::updatePlayerItems($steamID);
		}
		$criteria = new CDbCriteria;
		$criteria->distinct = true;
		$item_rarity=Items::model()->findAll(array(
		    'select'=>'t.item_rarity, count(t.item_rarity)',
		    'group'=>'t.item_rarity',
		    'order'=>'count(t.item_rarity) desc'
			));

		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/inventory.js', CClientScript::POS_BEGIN);
		$this->render('//site/inventory', array(
			'items'=>$items,
			'user'=>0,
			'item_rarities'=>$item_rarity
			));
	}
}
