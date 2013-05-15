<div class = "span9">
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

</div>