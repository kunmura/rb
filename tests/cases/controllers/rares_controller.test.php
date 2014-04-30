<?php
/* Rares Test cases generated on: 2013-05-11 15:21:22 : 1368253282*/
App::import('Controller', 'Rares');

class TestRaresController extends RaresController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RaresControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.rare', 'app.card', 'app.player', 'app.players_card');

	function startTest() {
		$this->Rares =& new TestRaresController();
		$this->Rares->constructClasses();
	}

	function endTest() {
		unset($this->Rares);
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