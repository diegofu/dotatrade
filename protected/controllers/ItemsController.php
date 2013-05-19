<?php

class ItemsController extends Controller
{
	public function actionIndex() {

	}

	public function actionItemDetail($id) {
		$item = Items::model()->with('itemsetItems','itemsetItems.itemSet')->findByPK($id);
		if(empty($item)) {
			throw new CHttpException(404, 'There is no such item.');
		}
		$itemset = null;
		$otherItems = null;
		if(!empty($item->itemsetItems)) {
			$itemset = $item->itemsetItems[0]->itemSet;
			$otherItems = ItemsetItems::model()->with('item')->findAll('item_set_id=:item_set_id', array(':item_set_id'=>$itemset->id));
		}
		$this->render('//site/item_detail', array('item'=>$item, 'otherItems'=>$otherItems, 'itemset'=>$itemset));
	}

	public function actionItemsetDetail($id) {
		$item = Itemsets::model()->with('itemsetItems', 'itemsetItems.item')->findByPK($id);
		
		if(empty($item)) {
			throw new CHttpException(404, 'There is no such item.');
		}
		$this->render('//site/item_detail', array('item'=>$item));
	}
}
