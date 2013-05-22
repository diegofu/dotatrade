$(function(){

	$('#inventoryPanel .itemContainer').click(function(e){
		e.preventDefault();
		if($(this).hasClass('emptyItem')) {
			return;
		}

		var empty_slot = $('#tradingPanel').find("[data-has-item*='false']:first");

		if(empty_slot.length <= 0) return;
		var item = $(this).html();
		$(this).find('img').hide();
		$(this).find('div').hide();
		$(this).addClass('emptyItem');

		// console.log();
		if($('select#select_rarity').val()) {
			$(this).hide();
		}

		empty_slot.attr('data-item-id', $(this).attr('id'));
		empty_slot.html(item);
		empty_slot.attr('data-has-item', 'true');
		empty_slot.removeClass('emptySlot');
	});

	$('#tradingPanel .itemContainer').click(function(e){
		if($(this).hasClass('emptySlot')) return;
		var item_id = $(this).attr('data-item-id');
		var item_detail = $(this).html();
		$(this).attr('data-item-id', '');
		$(this).html($('#emptySlotTemplate').html());
		$(this).addClass('emptySlot');
		$(this).attr('data-has-item', 'false');
		$('#'+item_id).html(item_detail);
		$('#'+item_id).removeClass('emptyItem');
		if($('select#select_rarity').val() == $('#'+item_id).attr('data-item-rarity'))
			$('#'+item_id).show();
	});

	$('select#select_rarity').change(function(e){
		// $("select option:selected").each(function () {
		// 	str += $(this).text() + " ";
		// });
		var rarity = $(this).val();
		if(rarity == null) {
			$('#inventoryPanel .itemContainer').each(function() {
				$(this).show();
		});
		}

		$('#inventoryPanel .itemContainer').each(function() {
			if( $(this).attr('data-item-rarity') != rarity ) {
				$(this).hide();
			} else {
				$(this).show();
			}
		});
	});
});


function showAllItems() {
	$('#inventoryPanel .itemContainer').each(function() {
		if($(this).hasClass('emptyItem')) return;

		$(this).show();
	});
}