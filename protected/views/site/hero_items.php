
<div class="span12">
	<div id="heroImageContainer" class="text-center">
		<h1><?=strtoupper($hero->localized_name) ?></h1>
		<?= CHtml::image(Yii::app()->request->baseUrl.'/images/heroes/originals/'.join('_', explode(' ', $hero->localized_name)).'.png', $hero->localized_name, array('id'=>'heroImage')) ?>
	</div>
</div>
<hr>
<div class="span12 text-center">
	<h3>BIO</h3>
</div>
<div class = "contentContainer" id="descriptionContainer">

	placeholder
	
</div>
<div class="span12 text-center">
	<h3>ITEMS</h3>
</div>
<div id="heroItemsContainer" class="contentContainer">
	<div class = "row">
		<div class="span">
			<? if(empty($items)): ?>

			<? else: ?>
				<? foreach($items as $item): ?>
					<a href = "/items/itemDetail/<?=$item->id?>" class = "itemContainerCell span <?=$item->rarity0->color?>_border">
						<div class="itemContainer">
							<?= CHtml::image(Yii::app()->request->baseUrl.'/images/items/'.$item->id.'_medium.png', $item->name, array('class'=>'heroItems')) ?>
						</div>
						<div class="itemDetail">
							<div class="name">
								<?= $item->name ?>
							</div>
							<small class="rarity" data-color = "<?=$item->rarity0->color?>">
								<?=$item->item_rarity?>
							</small>
						</div>
					</a>
				<? endforeach ?>
			<? endif ?>
		</div>
	</div>
</div>
	
<div class="span12 text-center">
	<h3>SETS</h3>
</div>
<div id="heroItemsContainer" class="contentContainer">
	<div class = "row">
		<div class="span">
			<? if(empty($items)): ?>

			<? else: ?>
				<? foreach($itemsets as $item): ?>
					<a href = "/items/itemsetDetail/<?=$item->id?>" class = "itemContainerCell span <?=$item->rarity0->color?>_border">
						<div class="itemContainer">
							<?= CHtml::image(Yii::app()->request->baseUrl.'/images/items/'.$item->id.'_medium.png', $item->name, array('class'=>'heroItems')) ?>
						</div>
						<div class="itemDetail">
							<div class="name">
								<?= $item->name ?>
							</div>
							<small class="rarity" data-color = "<?=$item->rarity0->color?>">
								<?=$item->item_rarity?>
							</small>
						</div>
					</a>
				<? endforeach ?>
			<? endif ?>
		</div>
	</div>
</div>