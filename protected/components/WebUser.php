<?
class WebUser extends CWebUser {

	public function getUser() {
		if($this->isGuest) {
			return $this->guestName;
		} else {
			$steamID = $this->getState('steamID');
			$player = Players::model()->findByPK($steamID);
			return $player;
		}
	}

	public function getIsGuest() {
		return $this->getState('SteamAuth') == null;
	}

	public function getName() {
		if($this->isGuest) {
			return $this->guestName;
		} else {
			$steamID = $this->getState('steamID');
			$player = Players::model()->findByPK($steamID);
			return $player->personaname;
		}
	}

	public function getID() {
		if($this->isGuest) {
			return $this->guestName;
		} else {
			return $this->getState('steamID');
		}
	}

	public function isAdmin() {
		return true;
	}

	public function getTradeLimit() {
		return 8;
	}
}