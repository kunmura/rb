<?php
/* Rare Test cases generated on: 2013-05-11 15:16:56 : 1368253016*/
App::import('Model', 'Rare');

class RareTestCase extends CakeTestCase {
	var $fixtures = array('app.rare', 'app.card', 'app.player', 'app.players_card');

	function startTest() {
		$this->Rare =& ClassRegistry::init('Rare');
	}

	function endTest() {
		unset($this->Rare);
		ClassRegistry::flush();
	}

}
?>