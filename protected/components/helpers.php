<?
	function itemGameToJSON($file) {
		$in = file($file);
		$out = fopen('json.txt', 'w');
		
		for($i = 0; $i < count($in); $i++) {
			$line = trim($in[$i]);
			if($line == '{') {
				fwrite($out, $in[$i]);
				continue;
			}
			if($line == '}'){
				fwrite($out, substr($in[$i], 0, -2).',
	');
				continue;
			}	
			$line = explode('	', $line);
			
			if(count($line) == 1){
				fwrite($out, substr($in[$i], 0, -2).':
	');
				continue;
			} 
			$indents = substr($in[$i], 0, strpos($in[$i], $line[0]));
			fwrite($out, $indents . $line[0].':'.$line[2].',
	');
		}


	}


?>