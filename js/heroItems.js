$(function(){
	$('.itemContainerCell').hover(
	function(e){
		var rarity_element = $(this).find('small.rarity');
		var color = rarity_element.attr('data-color');
		$(this).addClass('active');
		rarity_element.addClass(color);

	}, function(e){
		$(this).removeClass('active');
		var rarity_element = $(this).find('small.rarity');
		// alert(rarity_element.length);
		rarity_element.attr('class', 'rarity');
	});
});