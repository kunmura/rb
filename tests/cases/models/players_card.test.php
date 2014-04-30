<?php
/* PlayersCard Test cases generated on: 2013-05-11 15:16:40 : 1368253000*/
App::import('Model', 'PlayersCard');

class PlayersCardTestCase extends CakeTestCase {
	var $fixtures = array('app.players_card', 'app.player', 'app.card', 'app.rare');

	function startTest() {
		$this->PlayersCard =& ClassRegistry::init('PlayersCard');
	}

	function endTest() {
		unset($this->PlayersCard);
		ClassRegistry::flush();
	}

}
?>