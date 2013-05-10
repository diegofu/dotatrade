<? foreach($items as $item): ?>
	<? if(!empty($item->image_url)): ?>
		<?= CHtml::image('../images/items/'.$item->id.'.png', $item->name) ?>
	<? else: ?>
		<?= CHtml::link(CHtml::image('../images/items/empty.png', $item->name),array('item/'.$item->id)) ?>
		
	<? endif ?>

<? endforeach ?>