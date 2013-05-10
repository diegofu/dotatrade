<?
	if($items == NULL) {

	}
	else {
		// echo "<pre>";
		// foreach($items as $item) {
		// 	print_r(array_merge($item->attributes, $item->defindex0->attributes));
		// }
	
		// echo "</pre>";

		foreach($items as $item) {
			echo "<div>". $item->inventory. ' ' . $item->defindex0->name . "</div>";
			echo CHtml::image('../images/items/' . $item->defindex . '.png', $item->defindex0->name, array('width'=>'200', 'height'=>'133'));
		}
	}


?>