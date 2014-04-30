<?php
/* Effect Test cases generated on: 2013-05-11 14:53:58 : 1368251638*/
App::import('Model', 'Effect');

class EffectTestCase extends CakeTestCase {
	var $fixtures = array('app.effect', 'app.skill');

	function startTest() {
		$this->Effect =& ClassRegistry::init('Effect');
	}

	function endTest() {
		unset($this->Effect);
		ClassRegistry::flush();
	}

}
?>