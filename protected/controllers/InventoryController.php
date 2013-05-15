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
		$this->render('//site/inventory', array('items'=>$items));
	}
}
