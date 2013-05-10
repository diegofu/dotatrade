<?

	function APIKEY() {
		return 'B31893E543D0CF87B9C54D0E417CB628';
	}


	function getBackPackURL($steamID) {
		return "http://api.steampowered.com/IEconItems_570/GetPlayerItems/v0001/?key=".APIKEY()."&SteamID=" . $steamID;
	}

	function getBackPack($steamID) {
		return json_decode(file_get_contents(getBackPackURL($steamID)), true);
	}
	/*
	 * get the text file used in game play by Dota 2
	 *
	 */
	function getSchemaURL() {
		return "http://api.steampowered.com/IEconItems_570/GetSchemaURL/v0001/?key=".APIKEY();
	}

	function getSchema() {
		return json_decode(file_get_contents("http://api.steampowered.com/IEconItems_570/GetSchema/v0001/?key=".APIKEY()), true);
	}

	function getItemsGameURL() {
		$json = json_decode(file_get_contents(getSchemaURL()), true);
		return $json['result']['items_game_url'];
	}

	function getItemsGame() {
		return file_get_contents(getItemsGameURL());
	}

	function getPlayerSummaryURL($steamID) {
		$api = APIKEY();
		return "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key={$api}&steamids={$steamID}";
	}

	function getPlayerSummary($steamID) {
		return json_decode(file_get_contents(getPlayerSummaryURL($steamID)), true)['response']['players'][0];
	}

	function getHeroList($language = 'en-us', $itemizedonly = 0) {
		$api = APIKEY();

		return json_decode(file_get_contents("http://api.steampowered.com/IEconDOTA2_570/GetHeroes/v1?key=$api&language=$language&itemizedonly=$itemizedonly"), true)['result'];
	}

	/*
	 * parse the txt file in getSchemaURL to a json 
	 * file
	 *
	 */
	function itemsGameToJSON($file = NULL, $outname = 'json.txt') {
		if($file == NULL) {
			$file = getItemsGameURL();
		}
		$in = file($file);
		$out = fopen($outname, 'w');
		$s = "";
		$length = count($in);
		fwrite($out, '{');
		for($i = 0; $i < $length; $i++) {
			$line = trim($in[$i]);
			if($line == '{') {
				fwrite($out, $in[$i]);
				continue;
			}
			if($line == '}'){
				if( ($i + 1 < $length) and trim($in[$i+1]) != '}' ) {
					fwrite($out, substr($in[$i], 0, -2).",\n");
					continue;
				}
				fwrite($out, substr($in[$i], 0, -2)."\n");
				continue;
				
			}	
			$line = explode('	', $line);
			
			if(count($line) == 1){
				fwrite($out, substr($in[$i], 0, -2).":\n");
				continue;
			} 
			$indents = substr($in[$i], 0, strpos($in[$i], $line[0]));

			if( ($i + 1 < $length) and (trim($in[$i+1])!= '}') ) {
				fwrite($out, $indents . $line[0].':'.$line[2].",\n");
			} else {
				fwrite($out, $indents . $line[0].':'.$line[2]."\n");
			}
			
		}

		fwrite($out, '}');

		fclose($out);

		return json_decode(file_get_contents($outname), true);
	}


	function itemDescriptionsToDatabase() {
		return file('images/items/descriptions.txt');
		
	}


?>