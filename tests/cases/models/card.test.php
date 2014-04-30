<?php
/* Card Test cases generated on: 2013-05-11 15:14:22 : 1368252862*/
App::import('Model', 'Card');

class CardTestCase extends CakeTestCase {
	var $fixtures = array('app.card', 'app.rare', 'app.player', 'app.players_card');

	function startTest() {
		$this->Card =& ClassRegistry::init('Card');
	}

	function endTest() {
		unset($this->Card);
		ClassRegistry::flush();
	}

}
?>