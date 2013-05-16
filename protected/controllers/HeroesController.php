<?php

class HeroesController extends Controller
{
	

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}


	public function actionIndex()
	{
		$this->render('//site/heroes');
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Heroes;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Heroes']))
		{
			$model->attributes=$_POST['Heroes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->hero_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Heroes']))
		{
			$model->attributes=$_POST['Heroes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->hero_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Heroes('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Heroes']))
			$model->attributes=$_GET['Heroes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Heroes the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Heroes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	/*
	"heroes": [
			{
				"name": "npc_dota_hero_antimage",
				"id": 1,
				"localized_name": "Anti-Mage"
			},
	*/
	public function JSON_to_database($json = NULL) {
		if($json == NULL) $json = getHeroList()['heroes'];
		foreach($json as $hero) {
			$model = new Heroes();
			$model->name = $hero['name'];
			$model->hero_id = $hero['id'];
			$model->localized_name = $hero['localized_name'];
			if(!$model->save()) {
				var_dump($model->getErrors());
				exit;
			}
		}
	}

	/**
	 * Performs the AJAX validation.
	 * @param Heroes $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='heroes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
