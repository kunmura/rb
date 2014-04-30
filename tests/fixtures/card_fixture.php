<?php
/* Card Fixture generated on: 2013-05-11 15:09:20 : 1368252560 */
class CardFixture extends CakeTestFixture {
	var $name = 'Card';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'imageurl' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'max_level' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'rarity_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'cost' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'atk' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'max_atk' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'def' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'max_def' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'agi' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'max_agi' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill1' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill1_rate' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill1_max_rate' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill2' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill2_rate' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill2_max_rate' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill3' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill3_rate' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'skill3_max_rate' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'max_awake' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
			'imageurl' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'max_level' => 1,
			'rarity_id' => 1,
			'cost' => 1,
			'atk' => 1,
			'max_atk' => 1,
			'def' => 1,
			'max_def' => 1,
			'agi' => 1,
			'max_agi' => 1,
			'skill1' => 1,
			'skill1_rate' => 1,
			'skill1_max_rate' => 1,
			'skill2' => 1,
			'skill2_rate' => 1,
			'skill2_max_rate' => 1,
			'skill3' => 1,
			'skill3_rate' => 1,
			'skill3_max_rate' => 1,
			'max_awake' => 1,
			'visible' => 1,
			'creates' => '2013-05-11 15:09:20',
			'modified' => '2013-05-11 15:09:20'
		),
	);
}
?>