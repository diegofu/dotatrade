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

	// this should be a one time function?
	/*
	public function actionDescriptionFileToDatabase() {
		$file = itemDescriptionsToDatabase();
		foreach($file as $line) {
			$item_id = trim(substr($line, 0, 5));
			$description = str_replace('"', '', trim(substr($line, 5)));
			if($description == 'This new item has no description.') {
				continue;
			}

			$item = Items::model()->findByPK(intval($item_id));
			if(empty($item)){
				$item = ItemSets::model()->findByPK(intval($item_id));
				if(empty($item)) continue;
			}

			$item->item_store_description = $description;
			$item->save();
		}
	}

	*/

	public function actionUpdateDatabase() {
		if(!$e = $this->updateHeroes()){
			$this->render('error', array('error'=>$e));
			return;
		}
		list($e, $empty_bundles, $bundle_item_no_id) = $this->updateItems();
		if($e != true){
			$this->render('error', array('error'=>$e));
			return;
		}
		

		$this->render('index');
	}


	private function updateItems() {
		$items_game = itemsGameToJSON('json.txt')['items_game'];
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
			ItemUsedHeroes::model()->deleteAll();
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

				// items heroes table
				
				
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

				if(array_key_exists('used_by_heroes', $itemInfo)) {
					foreach($itemInfo['used_by_heroes'] as $hero=>$value) {
						$hero_id = Heroes::model()->find('name=:name', array(':name'=>$hero))->hero_id;
						if(empty($hero_id)) continue;
						$item_used_hero = new ItemUsedHeroes();
						$item_used_hero->hero_id = $hero_id;
						$item_used_hero->id = $itemID;
						
						if(!$item_used_hero->save()) {
							var_dump($item_used_hero->getError());
							throw new CException('Heroes used Item transaction failed');
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
			
		
		$transaction = Yii::app()->db->beginTransaction();
		$itemizedHeroes = getHeroList('en-us', 1);
		
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
			
		
		return true;

	}
}