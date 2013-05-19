$(function(){

	$('#inventoryPanel .itemContainer').click(function(e){
		e.preventDefault();
		if($(this).hasClass('emptyItem')) {
			return;
		}

		$(this).find('img').hide();
		$(this).find('div').hide();
	})

});