<div class="span12">
	<div class="row">
		<div class="span6" id="itemDetailImgContainer">
			<?=CHtml::image(Yii::app()->request->baseUrl.'/images/items/originals/'.$item->id.'.png', $item->name, array('id'=>"itemDetailImg")) ?>
		</div>
		<div class="span6">
			<h3><?=$item->name?></h3>
			<div id="itemDetailAttr">
				<p>Rarity: <span class="<?=$item->rarity0->color?>">
					<?=ucfirst($item->item_rarity) ?>
				</p>
				<? if($item->prefab != 'bundle'): ?>
					<p>Slot: <?= empty($item->item_slot) ? 'N/A':$item->item_slot ?></p>
				<? endif ?>
			</div>
			<div id="itemDetailDescrip">
				<?=$item->item_store_description?>
			</div>


			<? if($item->prefab == 'bundle'): ?>
				<ul>
					<? foreach($item->itemsetItems as $i): ?>
					<li>
						<a href = "/items/itemDetail/<?=$i->item_id?>">
							<?=$i->item->name ?>
						</a>
					</li>
					
					<? endforeach?>
				</ul>
			<? else: ?>
				<? if(!empty($item->itemsetItems)): ?>
					<dl>Part of the 
					<a href = "<?=Yii::app()->request->baseUrl?>/items/itemsetDetail/<?=$item->itemsetItems[0]->item_set_id?>">
						<?=$item->itemsetItems[0]->itemSet->name?>
					</a>
					set:
				</dl>
					<ul>
					<? foreach($otherItems as $i): ?>
						<li>
							<a href = "<?=Yii::app()->request->baseUrl?>/items/itemDetail/<?=$i->item->id?>">
								<?=$i->item->name?>
							</a>
						</li>
					<? endforeach ?>
					</ul>
				<? endif?>
			<? endif ?>
		</div>
	</div>
</div>

<dl class="span12 text-center">
	<h2>Users who wants to trade</h2>
</dl>
<div class="contentContainer">
	

</div>





