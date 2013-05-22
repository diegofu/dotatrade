
<div class="itemContainer hide" id="emptySlotTemplate">
	<img src="<?=Yii::app()->request->baseUrl.'/images/items/more_icon.png' ?>">
	<div class="text-center">
		<small>Empty</small>
	</div>
</div>
<div  id="inventory-items">
<? if($this->id == 'inventory'):?>
<div class="contentContainer" id="tradingPanel">
	<? for($i = 0; $i<Yii::app()->user->getTradeLimit(); $i++): ?>
		<div class="itemContainer emptySlot" data-has-item = "false" data-item-id = "">
			<img src="<?=Yii::app()->request->baseUrl.'/images/items/more_icon.png' ?>">
			<div class="text-center">
				<small>Empty</small>
			</div>
		</div>

	<? endfor ?>
</div>
<? endif ?>
<? if(!empty($items)): ?>
<div class = "span11 contentContainer" id="inventoryPanel">
	<?  
		$last_element = end($items);
		reset($items);
		$pages = ceil($last_element->inventory / 64.0);
		$length = count($items);
	?>
	<div class="row">
		<div class="span4">
			<?= CHtml::dropDownList(
			'select_rarity', 
			'All', 
			CHtml::listData($item_rarities, 'item_rarity', 'item_rarity'),
			array('prompt'=>'all')
			); ?>
		</div>
	</div>

	<? $j = 0 ?>
	<? for($i = 1; $i <= $pages * 64; $i++): ?>

		<? if ($items[$j]->inventory != $i ): ?>
			<div class = "itemContainer emptyItem">
				
			</div>
		<? else: ?>
			<div class = "itemContainer" id="<?=$items[$j]->original_id?>" data-item-rarity="<?=$items[$j]->item->item_rarity?>">
				<?= CHtml::image(Yii::app()->request->baseUrl.'/images/items/'.$items[$j]->defindex.'_small.png', $items[$j]->item->name) ?>
				<div class = "text-center">
					<small class = "<?=$items[$j]->item->rarity0->color ?>">
						<?= $items[$j]->item->item_rarity ?>
					</small>
				</div>
			</div>
			<? if($j+1 < $length) $j++ ?>
		<? endif ?>

	<? if($i % 64 == 0): ?>
		<hr class = "span11">
	<? endif ?>
	<? endfor ?>
</div>
<? else: ?>
	<div class = "span11 alert alert-error text-center">

		<? if($user): ?>
			Sorry, whether this user's inventory is private, or the inventory has no items.
		<? else: ?> 
			<? if(Yii::app()->user->isGuest): ?>
				Please Login through <a href="?login">
						<img src="http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_large_border.png"/>
					</a> to see your inventory
			<? else: ?>
		 		Sorry, we cannot find any items in your inventory. Please make sure your backpack is public.
		 	<? endif ?>
		<? endif ?>
		
	</div>
<? endif ?>
</div>
