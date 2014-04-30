<?php
/* Players Test cases generated on: 2013-05-11 15:19:51 : 1368253191*/
App::import('Controller', 'Players');

class TestPlayersController extends PlayersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PlayersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.player', 'app.card', 'app.rare', 'app.players_card');

	function startTest() {
		$this->Players =& new TestPlayersController();
		$this->Players->constructClasses();
	}

	function endTest() {
		unset($this->Players);
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