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
		list($e, $empty_bundles, $bundle_item_no_id) = $this->updateItems();
		if($e != true){
			$this->render('error', array('error'=>$e));
			exit;
		}
		if(!$e = $this->updateHeroes()){
			$this->render('error', array('error'=>$e));
			exit;
		}

		$this->render('index');
	}


	private function updateItems() {
		$items_game = itemsGameToJSON()['items_game'];
		$transaction = Yii::app()->db->beginTransaction();
		try{
			ItemSetItems::model()->deleteAll();

			/****** Prefabs *******/
			$prefabs = $items_game['prefabs'];
			foreach($prefabs as $prefab=>$prefabInfo) {
				$model = Prefabs::model()->findByPK($prefab);
				if(empty($model)) {
					$model = new Prefabs();
					$model->name = $prefab;
				}
				$model->attributes = $prefabInfo;
				if(!$model->save()) {
					throw new CException('Prefab Transaction Failed');
				}
			}


			/****** colors *******/
			$colors = $items_game['colors'];
			foreach($colors as $color=>$colorInfo) {
				$model = Colors::model()->findByPK($color);
				if(empty($model)) {
					$model = new Prefabs();
					$model->color = $color;
				}
				$model->attributes = $colorInfo;
				if(!$model->save()) {
					throw new CException('Color Transaction Failed');
				}
			}

			/****** rarities *******/
			$rarities = $items_game['rarities'];
			foreach($rarities as $rarity=>$rarityInfo) {
				$model = Rarities::model()->findByPK($rarity);
				if(empty($model)) {
					$model = new Prefabs();
					$model->rarity = $rarity;
				}
				$model->attributes = $rarityInfo;
				if(!$model->save()) {
					throw new CException('Rarity Transaction Failed');
				}
			}


			/****** items and itemsets *******/
			$items = $items_game['items'];
			$empty_bundles = array();
			$bundle_item_no_id = array();
			foreach($items as $itemID=>$itemInfo) {
				if(!is_numeric($itemID)) continue;
				$bundle = $itemInfo['prefab'] == 'bundle' ? true : false;
				if($bundle) {
					$model = ItemSets::model()->findByPK($itemID);
					if(empty($model)) $model = new ItemSets();

					// if there's no bundle key, then it's a weird bundle
					if(!array_key_exists('bundle', $itemInfo)) 
						array_push($empty_bundles, $itemID);
				} else {
					$model = Items::model()->findByPK($itemID);
					if(empty($model)) $model = new Items();
				}


				$model->attributes = $itemInfo;
				$model->id = $itemID;
				if(!$model->save()) {
					throw new CException('Item Transaction Failed');
				} 
				if ($bundle) {
					// if it's bundle, update the itemset_items table
					foreach($itemInfo['bundle'] as $item=>$value) {
						$item_id = Items::model()->find('name=:name', array(':name'=>$item))->id;
						if(empty($item_id)) {
							array_push($bundle_item_no_id, $item);
							continue;
						}

						$itemsetItems = new ItemSetItems();
						$itemsetItems->item_set_id = $itemID;
						$itemsetItems->item_id = $item_id;

						if(!$itemsetItems->save()) {
							throw new CException('Itemset Item Transaction Failed');
						}
						
					}
				}

			}
			$transaction->commit();
			return array(true, $empty_bundles, $bundle_item_no_id);
		} catch (Exception $e) {
			$transaction->rollback();
			return array($e, $empty_bundles, $bundle_item_no_id);
		}
	}

	private function updateHeroes() {
		$heroList = getHeroList();
		$numberOfHeroes = Heroes::model()->count();

		if($heroList['count'] != $numberOfHeroes) {
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
				return $e;
			}
			
		}

		$itemizedHeroes = getHeroList('en-us', 1);
		$numberOfItemizedHeroes = Heroes::model()->count('has_items = 1');
		if($itemizedHeroes['count'] != $numberOfItemizedHeroes) {
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
				return $e;
			}
			
		}

	}
}