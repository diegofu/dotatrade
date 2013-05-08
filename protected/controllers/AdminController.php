<?php

class AdminController extends Controller
{
	public $layout = 'column2';
	

	public function actionIndex() {
		$this->render('index');
	}

	public function actionViewItems() {
		$items = Items::model()->findAll();
		$this->render('list', array('items'=>$items));
	}

	public function actionViewHeroes() {
		$heroes = Heroes::model()->findAll();
		$this->render('list', array('items'=>$heroes));
	}

	public function actionUpdateDatabase() {
		$success = true;
		$this->updateItems();

		$this->render('index');
	}

	private function updateItemSets() {
		$transaction = Yii::app()->db->beginTransaction();
		try{
			$itemsets = getSchema()['result']['item_sets'];
			foreach($itemsets as $key=>$value) {
				ItemSets::model()->deleteAll();
				$itemset = new ItemSets();
				$itemset->item_set = $value['item_set'];
				$itemset->name = $value['name'];
				if(array_key_exists('store_bundle', $value)) $itemset->store_bundle = $value['store_bundle'];
				if(!$itemset->save()) {
					throw new CException('Item Sets Transaction Failed');
				}
			}

			$transaction->commit();
			return true;
		}
		catch (Exception $e) {
			$transaction->rollback();
			return $e;
		}
	}

	private function updateItems() {
		$transaction = Yii::app()->db->beginTransaction();
		try{
			$items = itemsGameToJSON()['items_game']['items'];
			foreach($items as $itemID=>$itemInfo) {
				if(!is_numeric($itemID)) continue;

				if($itemInfo['prefab'] == 'bundle') {
					$model = ItemSets::model()->findByPK($itemID);
					if(empty($model)) $model = new ItemSets();
				} else {
					$model = Items::model()->findByPK($itemID);
					if(empty($model)) $model = new Items();
				}
				$model->attributes = $itemInfo;
				$model->id = $itemID;





				// $item = Items::model()->findByPK($itemID);
				// if(empty($item)) {
				// 	$item = new Items();
				// 	$item->id = $itemID;
				// }
				// foreach($item->attributeLabels() as $key=>$value) {
				// 	if($key == 'id'){

				// 	}else{
				// 		if(array_key_exists($key, $itemInfo))
				// 			$item->$key = $itemInfo[$key];
				// 	}
				// }

				if(!$model->save()) {
					var_dump($model->attributes);
					exit;
					throw new CException('Item Transaction Failed');
				}

			}
			$transaction->commit();
			return true;
		} catch (Exception $e) {
			$transaction->rollback();
			var_dump($e);
			exit;
			return $e;
		}
	}

	private function updateHeroes() {
		$heroList = getHeroList();
		$numberOfHeroes = Heroes::model()->count();

		if(!$heroList['count'] == $numberOfHeroes) {
			$transaction = Yii::app()->db->beginTransaction();
			try{
				foreach($heroList['heroes'] as $hero) {
					$model = Heroes::model()->findByPK($hero['id']);
					if(empty($model)) $model = new Heroes();
					$model->attributes = $hero;
					if(!$model->save()) throw new CException('Hero Transaction Failed');
				}
				$transaction->commit();
			}
			catch (Exception $e) {
				$transaction->rollback();
				return false;
			}
			
		}

		$itemizedHeroes = getHeroList($itemizedonly = 1);
		$numberOfItemizedHeroes = Heroes::model()->count(array('has_items'=>1));
		if(!$heroList['count'] == $numberOfHeroes) {
			$transaction = Yii::app()->db->beginTransaction();
			try{
				foreach($itemizedHeroes['heroes'] as $hero) {
					$model = Heroes::model()->findByPK($hero['id']);
					if(empty($model)) $model = new Heroes();
					$model->has_items = 1;
					if(!$model->save()) throw new CException('Itemized Hero Transaction Failed');
				}
				$transaction->commit();
				return true;
			}
			
			catch (Exception $e) {
				$transaction->rollback();
				return false;
			}
			
		}

	}
}