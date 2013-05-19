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
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/inventory.js', CClientScript::POS_BEGIN);
		$this->render('//site/inventory', array('items'=>$items, 'user'=>0));
	}
}
