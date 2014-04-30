<?php
/* Player Test cases generated on: 2013-05-11 15:14:48 : 1368252888*/
App::import('Model', 'Player');

class PlayerTestCase extends CakeTestCase {
	var $fixtures = array('app.player', 'app.card', 'app.rare', 'app.players_card');

	function startTest() {
		$this->Player =& ClassRegistry::init('Player');
	}

	function endTest() {
		unset($this->Player);
		ClassRegistry::flush();
	}

}
?>