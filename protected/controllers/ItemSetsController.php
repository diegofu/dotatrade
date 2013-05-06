<?php

class ItemSetsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
		$model=new ItemSets;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ItemSets']))
		{
			$model->attributes=$_POST['ItemSets'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->item_set));
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

		if(isset($_POST['ItemSets']))
		{
			$model->attributes=$_POST['ItemSets'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->item_set));
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ItemSets');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ItemSets('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ItemSets']))
			$model->attributes=$_GET['ItemSets'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ItemSets the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ItemSets::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/*
	[0] => Array
        (
            [item_set] => alchemy_essentials
            [name] => #DOTA_Set_Alchemy_Essentials
            [store_bundle] => Alchemy Essentials Set
            [items] => Array
                (
                    [0] => Assistant's Respirator
                    [1] => Assistant's Cutter
                    [2] => Assistant's Blades of Scientific Inquiry
                    [3] => Experimentalist's Laboratory Essentials
                    [4] => Experimentalist's Goggles
                    [5] => Experimentalist's Unstable Flask
                    [6] => Assistant's Muscle Pump
                )

        )
    */
	public function JSON_to_database($json = NULL) {
		if($json == NULL) $json = getSchema()['result']['item_sets'];
		foreach($json as $number=>$info) {
			$model = new ItemSets();
			$model->item_set = $info['item_set'];
			$model->name =$info['name'];
			if(array_key_exists('store_bundle', $info)) $model->store_bundle = $info['store_bundle'];
			if(!$model->save()) {
				var_dump($model->getErrors());
				exit;
			}
			foreach($info['items'] as $item) {
				$item_model = new ItemSetItems();
				$item_model->item_set = $info['item_set'];
				$item_model->name = $item;
				if(!$item_model->save()) {
					var_dump($item_model->getErrors());
					exit;
				}
			}
			
		}
	}


	/**
	 * Performs the AJAX validation.
	 * @param ItemSets $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='item-sets-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
