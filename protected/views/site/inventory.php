<div class = "span9">

<? if(!empty($items)): ?>
	<?  
		$last_element = end($items);
		reset($items);
		$pages = ceil($last_element->inventory / 64.0);
		$length = count($items);
	?>

	<? $j = 0 ?>
	<? for($i = 1; $i <= $pages * 64; $i++): ?>

		<? if ($items[$j]->inventory != $i ): ?>
			<div class = "imageContainer">
				<?= CHtml::image(Yii::app()->request->baseUrl.'/images/items/empty_small.png', 'Empty Slot') ?>
			</div>
		<? else: ?>
			<div class = "imageContainer">
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
		<hr class = "span9">
	<? endif ?>
	<? endfor ?>
<? else: ?>
	<div class = "span11 alert alert-error">
		<?= !$user ? 'Sorry, we cannot find any items in your backpack. Please make sure your backpack is public'
		:'Sorry, whether this user\'s backpack is private, or he has no items' ?>
		
	</div>
<? endif ?>
</div>