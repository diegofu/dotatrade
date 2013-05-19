<?php

class SiteController extends Controller
{

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$heroes = Heroes::model()->findAll();	
		$this->render('index', array('heroes'=>$heroes));
	}


	public function actionItems()
	{
		$items = Items::model()->findAll();
		$this->render('items', array('items'=>$items));
	}

	public function actionItemSets()
	{
		$itemsets = ItemSets::model()->findAll();
		$this->render('items', array('items'=>$itemsets));
	}

	public function actionItem($id)
	{
		$item = Items::model()->findByPK($_GET['id']);
		if(empty($item))
			$item = ItemSets::model()->findByPK($_GET['id']);
		if(empty($item))
			$this->render('error');
		else
			$this->render('item', array('item'=>$item));

	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	public function actionRedirect()
	{
		$this->redirect(Yii::app()->request->getBaseUrl(true));
	}


	public function actionHeroData($id)
	{
		$hero = Heroes::model()->findByPK($id);
		if(empty($hero)){
			$ret = array('success'=>false);
		}

		
		$criteria = new CDbCriteria;
		$criteria->alias = 'i';
		$criteria->join='LEFT JOIN tbl_item_used_heroes h ON (i.id=h.id)';
		$criteria->join.=' LEFT JOIN tbl_heroes t ON (h.hero_id = t.hero_id)';
		$criteria->condition='h.id=i.id AND t.hero_id='.$id;
		$itemsetsCount = ItemSets::model()->count($criteria);
		
		$criteria->condition.=' AND i.prefab != "default_item"';
		$itemsCount = Items::model()->count($criteria);

		$ret = array(
			'success'=>true,
			'itemsCount'=>$itemsCount,
			'itemsetsCount'=>$itemsetsCount,
			);
		
		
		$this->renderPartial('ajax-response',array('data'=>json_encode($ret)));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->request->getBaseUrl(true) . '/admin');
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}


	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}