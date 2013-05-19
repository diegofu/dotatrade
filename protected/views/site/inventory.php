
<div  id="inventory-items">
<? if($this->id == 'inventory'):?>
<div class="contentContainer" id="tradingPanel">
	<? for($i = 0; $i<Yii::app()->user->getTradeLimit(); $i++): ?>
		<div class="itemContainer emptyImage">
			<img src="<?=Yii::app()->request->baseUrl.'/images/items/more_icon.png' ?>", 'Add more'>
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

	<? $j = 0 ?>
	<? for($i = 1; $i <= $pages * 64; $i++): ?>

		<? if ($items[$j]->inventory != $i ): ?>
			<div class = "itemContainer emptyItem">
				
			</div>
		<? else: ?>
			<div class = "itemContainer" id="<?=$items[$j]->original_id?>">
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
