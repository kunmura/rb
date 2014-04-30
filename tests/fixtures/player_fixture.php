<?php
/* Player Fixture generated on: 2013-05-11 14:54:53 : 1368251693 */
class PlayerFixture extends CakeTestFixture {
	var $name = 'Player';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'level' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'exp' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'stamina_p' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'battle_p' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'quest' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'visible' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 1),
		'creates' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'level' => 1,
			'exp' => 1,
			'stamina_p' => 1,
			'battle_p' => 1,
			'quest' => 1,
			'visible' => 1,
			'creates' => '2013-05-11 14:54:53',
			'modified' => '2013-05-11 14:54:53'
		),
	);
}
?>