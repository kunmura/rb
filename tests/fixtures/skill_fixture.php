<?php
/* Skill Fixture generated on: 2013-05-11 15:17:41 : 1368253061 */
class SkillFixture extends CakeTestFixture {
	var $name = 'Skill';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'desc' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'effect_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'creates' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'desc' => 'Lorem ipsum dolor sit amet',
			'effect_id' => 1,
			'creates' => '2013-05-11 15:17:41',
			'modified' => '2013-05-11 15:17:41'
		),
	);
}
?>