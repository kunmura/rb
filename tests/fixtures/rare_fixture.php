<?php
/* Rare Fixture generated on: 2013-05-11 15:12:46 : 1368252766 */
class RareFixture extends CakeTestFixture {
	var $name = 'Rare';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'visible' => 1,
			'creates' => '2013-05-11 15:12:46',
			'modified' => '2013-05-11 15:12:46'
		),
	);
}
?>