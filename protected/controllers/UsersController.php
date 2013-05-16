<?php

class UsersController extends Controller
{
	public function actionIndex($id = Null) {
		if($id == Null) {
			$users = Players::model()->findAll();
			$this->render('//site/users', array('users'=>$users));
		} else {
			$crit = new CDbCriteria();
			$crit->condition = 'player_id = '.$id;
			$crit->order = 'inventory ASC';
			$users = PlayerItems::model()->findAll($crit);
			
			$this->render('//site/inventory', array('items'=>$users, 'user'=>1));
		}
	}
}
