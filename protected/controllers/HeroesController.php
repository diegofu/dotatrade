<?php

class HeroesController extends Controller
{
	public function actionIndex()
	{
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'js/heroes.js', CClientScript::POS_BEGIN);
       	$this->layout='heroes';	
		$this->render('//site/heroes');
	}

	public function actionItems($id)
	{
		$hero = Heroes::model()->findByPK($id);
		if(empty($hero)) {
			throw new CHttpException(404, 'The hero you are looking for is not found.');
		}
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/heroItems.js', CClientScript::POS_BEGIN);
		$criteria = new CDbCriteria;
		$criteria->alias = 'i';
		$criteria->join='LEFT JOIN tbl_item_used_heroes h ON (i.id=h.id)';
		$criteria->join.=' LEFT JOIN tbl_heroes t ON (h.hero_id = t.hero_id)';
		$criteria->condition='h.id=i.id AND t.hero_id='.$id;
		$itemsets = ItemSets::model()->findAll($criteria);
		
		$criteria->condition.=' AND i.prefab != "default_item"';
		$items = Items::model()->findAll($criteria);
		
		$this->render('//site/hero_items', 
			array(
				'hero'=>$hero, 
				'items'=>$items,
				'itemsets'=>$itemsets,
				)
			);

	}

}
