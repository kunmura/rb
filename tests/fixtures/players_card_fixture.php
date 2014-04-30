<?php
/* PlayersCard Fixture generated on: 2013-05-11 15:16:39 : 1368252999 */
class PlayersCardFixture extends CakeTestFixture {
	var $name = 'PlayersCard';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'player_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'level' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'level_exp' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'rare_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'atk' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'def' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'agi' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'hp' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill1_exp' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill2_exp' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill3_exp' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'visible' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 1),
		'creates' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'player_id' => 1,
			'card_id' => 1,
			'level' => 1,
			'level_exp' => 1,
			'rare_id' => 1,
			'atk' => 1,
			'def' => 1,
			'agi' => 1,
			'hp' => 1,
			'skill1_exp' => 1,
			'skill2_exp' => 1,
			'skill3_exp' => 1,
			'visible' => 1,
			'creates' => '2013-05-11 15:16:39',
			'modified' => '2013-05-11 15:16:39'
		),
	);
}
?>