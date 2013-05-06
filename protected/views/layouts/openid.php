<?
	if(Yii::app()->user->getState('SteamAuth') == NULL) {
		$action = "Welcome Guest. Please <a href=\"?login\"><img src=\"http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_small.png\"/></a> to *Website Action*.";
	}else {
		$action = "<div id = 'login'><a href = '?logout'>logout</a></div>";
	}

?>