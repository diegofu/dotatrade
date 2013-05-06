<?
	if($items == NULL) {

	}
	else {
		echo "<pre>";
		foreach($items as $item) {
			print_r(array_merge($item->attributes, $item->defindex0->attributes));
		}
	
	echo "</pre>";
	}


?>