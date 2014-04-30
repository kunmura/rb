<?php
/* Skill Test cases generated on: 2013-05-11 14:59:36 : 1368251976*/
App::import('Model', 'Skill');

class SkillTestCase extends CakeTestCase {
	var $fixtures = array('app.skill', 'app.effect');

	function startTest() {
		$this->Skill =& ClassRegistry::init('Skill');
	}

	function endTest() {
		unset($this->Skill);
		ClassRegistry::flush();
	}

}
?>