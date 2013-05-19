
$(function() {
	$('.heroPickerIconLink').hover(
		function(e){
			HeroIconHover($(this), true);
		},
		function(e){
			HeroIconHover($(this), false);
	});	


});

function HeroIconHover(element, show) {
	
	if(show) {
		var hero_id = element.attr('id').substring(8);
		var hero_item_info = element.attr('data-item');
		if(hero_item_info == undefined) {
			$.ajax({
				url: baseUrl + 'site/herodata/id/'+hero_id,
				data: JSON,
				success: function(data) {
					if(!data.success) return;
					hero_item_info = 'Number of Items: ' + data.itemsCount + ' Number of Sets: ' + data.itemsetsCount;
					element.attr('data-item', hero_item_info);
					$('#heroItemInfo').html(hero_item_info);
				}
			});
		} else {
			$('#heroItemInfo').html(hero_item_info);
		}
		
		var hero_name = element.attr('data-name');
		hero_name = hero_name.split('_').join(' ').toUpperCase();
		$('#heroBioLoading').html(hero_name);
		element.children().eq(0).show();
		
		
	}
	else {
		element.children().eq(0).hide();
		$('#heroBioLoading').html('CHOOSE A HERO');
		$('#heroItemInfo').html('');
	}
	
}