<?php
/* Skills Test cases generated on: 2013-05-11 15:21:51 : 1368253311*/
App::import('Controller', 'Skills');

class TestSkillsController extends SkillsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SkillsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.skill', 'app.effect');

	function startTest() {
		$this->Skills =& new TestSkillsController();
		$this->Skills->constructClasses();
	}

	function endTest() {
		unset($this->Skills);
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