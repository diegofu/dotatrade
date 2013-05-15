<?
	$image_src = empty($item->image_url) ? 'empty.png' : $item->image_url;
	
?>
<?= CHtml::image(Yii::app()->request->baseUrl.'/images/items/'.$image_src, $item->name) ?>


<?= $item->item_store_description ?>

<? if(get_class($item) == 'ItemSets'): ?>

	<? 
		$items_included = $item->itemsetItems;
		var_dump($items_included);
	?>
<? endif ?>