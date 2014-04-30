<?php
/* Effect Fixture generated on: 2013-05-11 14:53:58 : 1368251638 */
class EffectFixture extends CakeTestFixture {
	var $name = 'Effect';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'atk' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'def' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'agi' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'creates' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'atk' => 1,
			'def' => 1,
			'agi' => 1,
			'creates' => '2013-05-11 14:53:58',
			'modified' => '2013-05-11 14:53:58'
		),
	);
}
?>