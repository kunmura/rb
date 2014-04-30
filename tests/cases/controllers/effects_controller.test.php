<?php
/* Effects Test cases generated on: 2013-05-11 15:19:30 : 1368253170*/
App::import('Controller', 'Effects');

class TestEffectsController extends EffectsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EffectsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.effect', 'app.skill');

	function startTest() {
		$this->Effects =& new TestEffectsController();
		$this->Effects->constructClasses();
	}

	function endTest() {
		unset($this->Effects);
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