<?php
/* PlayersCards Test cases generated on: 2013-05-11 15:20:49 : 1368253249*/
App::import('Controller', 'PlayersCards');

class TestPlayersCardsController extends PlayersCardsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PlayersCardsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.players_card', 'app.player', 'app.card', 'app.rare');

	function startTest() {
		$this->PlayersCards =& new TestPlayersCardsController();
		$this->PlayersCards->constructClasses();
	}

	function endTest() {
		unset($this->PlayersCards);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>