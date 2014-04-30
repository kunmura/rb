<?php
/* Rearity Test cases generated on: 2013-05-11 15:07:11 : 1368252431*/
App::import('Model', 'Rearity');

class RearityTestCase extends CakeTestCase {
	var $fixtures = array('app.rearity');

	function startTest() {
		$this->Rearity =& ClassRegistry::init('Rearity');
	}

	function endTest() {
		unset($this->Rearity);
		ClassRegistry::flush();
	}

}
?>