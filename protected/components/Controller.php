<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	protected function beforeAction($action) {
		$api = APIKEY();

	
	    $openid = new LightOpenID(Yii::app()->request->getBaseUrl(true));
	    
	    if(!$openid->mode) {
	    	if(isset($_GET['login'])) {
	    		$openid->identity = "http://steamcommunity.com/openid";
	    		$openid->returnUrl = Yii::app()->request->getBaseUrl(true)."/site/redirect";
	        	header("Location: " . $openid->authUrl());
	    	}

	    } elseif($openid->mode == "cancel") {
	        // do something if the user cancelled the login process
	    } else {
	    	if(Yii::app()->user->getState('SteamAuth') == NULL) {
	    		if(!$openid->validate()) {
	       			// do something if validation process failed
	       		}
		   		Yii::app()->user->setState('SteamAuth', $openid->identity);
		   		$steamID = str_replace("http://steamcommunity.com/openid/id/", "", $openid->identity);

		   		Yii::app()->user->setState('steamID', $steamID);

	    	}
	    	
	       	// this should be done w/e. The only information we need 
	       	// is the steamID in 64 bits
	        // $this->redirect('http://localhost/site/contact');
	        
	    }
	    if(isset($_GET['logout'])){
	 		Yii::app()->user->setState('SteamAuth', NULL);
	 		Yii::app()->user->setState('steamID', NULL);
	    }

	    if(Yii::app()->user->getState('steamID') != NULL) {
	    	$this->updateProfile(Yii::app()->user->getState('steamID'));
	    }
		return parent::beforeAction($action);
	}

	/*
	"players": [
            {
                "steamid": "76561198060290569",
                "communityvisibilitystate": 3,
                "profilestate": 1,
                "personaname": "JukeBox_",
                "lastlogoff": 1363687928,
                "profileurl": "http://steamcommunity.com/profiles/76561198060290569/",
                "avatar": "http://media.steampowered.com/steamcommunity/public/images/avatars/4d/4d7a2214d7d6c61bf50158739b8d45b036624af0.jpg",
                "avatarmedium": "http://media.steampowered.com/steamcommunity/public/images/avatars/4d/4d7a2214d7d6c61bf50158739b8d45b036624af0_medium.jpg",
                "avatarfull": "http://media.steampowered.com/steamcommunity/public/images/avatars/4d/4d7a2214d7d6c61bf50158739b8d45b036624af0_full.jpg",
                "personastate": 0,
                "primaryclanid": "103582791429521408",
                "timecreated": 1331722325
            }
        ]
    */
	protected function updateProfile($steamID) {
		// $profile = getPlayerSummary($steamID);
		// $player = Players::model()->findByPK($steamID);
		// if(empty($player)) $player = new Players();
		// $player->attributes = $profile;
		
		// if(!$player->save()) {
		// 	var_dump($player->geErrors());
		// 	exit;
		// }
		return true;

	}
	/*
	[2] => Array
                        (
                            [id] => 29151832
                            [original_id] => 29151832
                            [defindex] => 4014
                            [level] => 1
                            [quality] => 4
                            [inventory] => 291
                            [quantity] => 1
                            [equipped] => Array
                                (
                                    [0] => Array
                                        (
                                            [class] => 8
                                            [slot] => 3
                                        )

                                )

                        )
    */
	protected function updatePlayerItems($steamID) {
		// $backpack = getBackPack($steamID)['result'];
		
		// foreach($backpack['items'] as $item) {

		// 	$item_model = Items::model()->findByPK($item['defindex']);
		// 	if(empty($item_model)) {
		// 		continue;
		// 		//TODO: send a notificication to admins
		// 	}
		// 	$criteria = new CDbCriteria();
		// 	$playerItem = PlayerItems::model()->findByPK($item['id']);
		// 	if(empty($playerItem)) $playerItem = new PlayerItems();
		// 	$playerItem->attributes = $item;

		// 	// make the inventory more human readable
		// 	// if valve does something with this in the future
		// 	// then this should be reverted
		// 	$inventory = $item['inventory'];

		// 	// convert to binary
		// 	$inventory = base_convert($inventory, 10, 2);

		// 	// make length to 32 and take the last 16
		// 	$inventory = substr(str_pad($inventory, 32, '0', STR_PAD_LEFT), 16);
			

		// 	$playerItem->inventory = base_convert($inventory, 2, 10);

		// 	$playerItem->equipped = array_key_exists('equipped', $item) ? 1 : 0;
		// 	$playerItem->player_id = $steamID;

		// 	if(!$playerItem->save()) {
		// 		$this->redirect(array('index', 'error'=>$steamID));
		// 	}
		// }
		
		$crit = new CDbCriteria();
		$crit->condition = "player_id=$steamID";
		$crit->order = "inventory ASC";
		return PlayerItems::model()->findAll($crit);
	}





}